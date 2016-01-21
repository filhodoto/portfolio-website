/*global -$ */
'use strict';
// generated on 2015-09-03 using generator-modern-frontend 0.1.7
var fs = require('fs');
var path = require('path');

var gulp = require('gulp');
var gutil = require('gulp-util');
var $ = require('gulp-load-plugins')();

var connectPHP = require('gulp-connect-php');
var browserSync = require('browser-sync');
var httpProxy = require('http-proxy');
var reload = browserSync.reload;


var through2 = require('through2');
var browserify = require('browserify');

var imageop = require('gulp-image-optimization');

//var ftp = require('gulp-ftp');
var ftp = require('vinyl-ftp');

//só faz a task 'stylesheets depois da 'sprites' ser feita
gulp.task('stylesheet', function () {
  return gulp.src('app/css/main.scss')
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      outputStyle: 'nested', // libsass doesn't support expanded yet
      precision: 10,
      includePaths: ['.'],
      onError: console.error.bind(console, 'Sass error:')
    }))
    .on('error', function (error) {
      console.log(error.stack);
      this.emit('end');
    })
    .pipe($.postcss([
      require('autoprefixer-core')({browsers: ['last 1 version']})
    ]))
    .pipe($.sourcemaps.write())
    .pipe(gulp.dest('.tmp/css'))
    .pipe(gulp.dest('dist/css'))
    .pipe(gulp.dest('app/css')) //add this here so the php server works, it calls for .css in app
    .pipe(reload({stream: true}));
});

gulp.task('sprites', function() {
  /* var spritesPath = 'app/media'; */
  var spritesPath = 'app/images';
  var identifiers = fs.readdirSync(spritesPath).filter(function(spritePath) {
    var stat = fs.statSync(spritesPath + '/' + spritePath);
    return stat.isDirectory();
  });
/*

  for (var i = 0; i < identifiers.length; i++) {
    var spriteData = gulp.src(spritesPath + '/' + identifiers[i] + '/*.png').pipe($.spritesmith({
      imgName: 'sprite_' + identifiers[i] + '.png',
      cssName: identifiers[i] + '..scss',
      imgPath: '../images/sprite_' + identifiers[i] + '.png',
      cssFormat: 'sass'
    }));


    // Pipe image stream
    spriteData.img
      .pipe(gulp.dest('.tmp/images'))
      .pipe(gulp.dest('dist/images'))

    // Pipe CSS stream
    spriteData.css
      .pipe(gulp.dest('app/css/sprites'));
  }
 */
});

gulp.task('javascript', function () {
  return gulp.src('app/js/*.js')
    .pipe(through2.obj(function (file, enc, next){ // workaround for https://github.com/babel/babelify/issues/46
      browserify(file.path)
      .transform('babelify')
      .transform('envify')
      .bundle(function(err, res){
        if (err) { return next(err); }

        file.contents = res;
        next(null, file);
      });
    }))
    .on('error', function (error) {
      console.log(error.stack);
      this.emit('end');
    })
    .pipe(gulp.dest('dist/js'))
    .pipe($.sourcemaps.init())
    .pipe($.uglify())
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest('.tmp/js'));
});

gulp.task('jshint', function () {
  return gulp.src('app/js/*.js')
    .pipe(reload({stream: true, once: true}))
    .pipe($.jshint())
    .pipe($.jshint.reporter('jshint-stylish'))
    .pipe($.if(!browserSync.active, $.jshint.reporter('fail')));

/*
.pipe(jshint())
  .pipe(jshint.reporter('jshint-stylish'))
  .pipe(jshint.reporter('fail'));    
*/
    
});

gulp.task('html', ['stylesheet'], function () {
	var assets = $.useref.assets({searchPath: ['.tmp', 'app/*.html', 'app/**/**/*.html', 'app/*.php', 'app/**/**/*.php', '.']});

	var opts = {
		conditionals: true,
		loose: true
	};  
  
	return gulp.src(['app/*.html','app/*.php', '!app/config.php','app/**/**/*.php'])
		.pipe(assets)
		.pipe($.if(['*.js','/**/*js'], $.uglify()))
		.pipe($.if('*.css', $.csso()))
		.pipe(assets.restore())
		.pipe($.useref())
		.pipe($.if(['*.html', '/**/*.html','*.php', '!config.php', '**/**/*.php'], $.minifyHtml(opts)))
		.pipe(gulp.dest('dist'));
        
});

gulp.task('images', function () {
  return gulp.src('app/media/**/*')
    .pipe($.cache($.imagemin({
      progressive: true,
      interlaced: true,
      // don't remove IDs from SVGs, they are often used
      // as hooks for embedding and styling
      svgoPlugins: [{cleanupIDs: false}]
    })))
    .pipe(gulp.dest('dist/media'));
});

gulp.task('fonts', function () {
  return gulp.src(require('main-bower-files')({
    filter: '**/*.{eot,svg,ttf,woff,woff2}'
  }).concat('app/fonts/**/*'))
    .pipe(gulp.dest('.tmp/fonts'))
    .pipe(gulp.dest('dist/fonts'));
});

gulp.task('extras', function () {
  return gulp.src([
    'app/*.*',
    '!app/*.html'
  ], {
    dot: true
  }).pipe(gulp.dest('dist'));
});

gulp.task('clean', require('del').bind(null, ['.tmp', 'dist']));

gulp.task('serve', ['stylesheet', 'javascript', 'fonts'], function () {
  
	//code if we are not using php server 
/*
	browserSync({
		notify: false,
		port: 9000,
		server: {
		  baseDir: ['.tmp', 'app'],
		  routes: {
		    '/bower_components': 'bower_components'
		  }
		}    
	});
*/
  
	//code if we are using a PHP server - e.g when using index.php
	
	//create php server
	connectPHP.server({
		port: 9001,
		base: 'app',
		open: false
	});
 
	//create proxy server
	var proxy = httpProxy.createProxyServer({});
	
	//use browserify
	browserSync({
	    notify: false,
	    port  : 9000,
	    server: {
			baseDir: ['.tmp', 'app'],
			routes: {
				'/bower_components': 'bower_components'
			},
	        //add middleware for the server to see if the request needs to be proxied
	        middleware: function (req, res, next) {
	            var url = req.url;
	
	            //these need to have the ones that are called in the beggining of the "serve" task - e.g ['stylesheet', 'javascript', 'fonts']
	            if (!url.match(/^\/(stylesheet|javascript|fonts|bower_components)\//)) {
	                proxy.web(req, res, { target: 'http://127.0.0.1:9001' });
	            } else {
	                next();
	            }
	        }
	    }
	});

  // watch for changes
  gulp.watch([
    'app/*.php',
    'app/*.html',
    'app/layouts/*.html',
    '.tmp/js/*.js',
    'app/images/**/*',
    '.tmp/fonts/**/*'
  ]).on('change', reload);

  gulp.watch(['app/css/**/*.scss', '!app/css/sprites/*.scss'], ['stylesheet']);
  gulp.watch('app/js/**/*.js', ['javascript']);
  gulp.watch('app/fonts/**/*', ['fonts']);
  gulp.watch('bower.json', ['wiredep', 'fonts']);
});

gulp.task('serve:dist', function () {
	//code if we are not using php server 
/*
	browserSync({
		notify: false,
		port: 9000,
		server: {
		  baseDir: ['.tmp', 'app'],
		  routes: {
		    '/bower_components': 'bower_components'
		  }
		}    
	});
*/
  
	//code if we are using a PHP server - e.g when using index.php
	
	//create php server
	connectPHP.server({
		port: 9002,
		base: 'dist',
		open: false
	});
 
	//create proxy server
	var proxy = httpProxy.createProxyServer({});
	
	//use browserify
	browserSync({
	    notify: false,
	    port  : 9001,
	    server: {
			baseDir: ['.tmp', 'dist'],
			routes: {
				'/bower_components': 'bower_components'
			},
	        //add middleware for the server to see if the request needs to be proxied
	        middleware: function (req, res, next) {
	            var url = req.url;
	
	            //these need to have the ones that are called in the beggining of the "serve" task - e.g ['stylesheet', 'javascript', 'fonts']
	            if (!url.match(/^\/(stylesheet|javascript|fonts|bower_components)\//)) {
	                proxy.web(req, res, { target: 'http://127.0.0.1:9002' });
	            } else {
	                next();
	            }
	        }
	    }
	});

  // watch for changes
  gulp.watch([
    'app/*.php',
    'app/*.html',
    'app/layouts/*.html',
    '.tmp/js/*.js',
    'app/images/**/*',
    '.tmp/fonts/**/*'
  ]).on('change', reload);

  gulp.watch(['app/css/**/*.scss', '!app/css/sprites/*.scss'], ['stylesheet']);
  gulp.watch('app/js/**/*.js', ['javascript']);
  gulp.watch('app/fonts/**/*', ['fonts']);
  gulp.watch('bower.json', ['wiredep', 'fonts']);
});

gulp.task('deploy', ['default'], function () {
    
    var conn = ftp.create(
    {
        host:     'new-dev.goncaloramalho.com',
        user:     'goncalo@goncaloramalho.com',
        password: 'goncalo123',
        log:      gutil.log
    } );

    var globs = [
        'dist/**'
    ];
    
/*
    var globs = [
        'dist/**',
        'css/**',
        'js/**',
        'media/**',
        'fonts/**',
        'index.html'
    ];
*/
    

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

	//para nao fazer o upload do folder onde temos os ficheiros (neste caso "dist"), mas sim só dos ficheiros
	//temos que trocar a "base: '.'" por "base: 'nome pasta de deploy'" neste caso "dist".
	//assim ele faz upload só dos ficheiros e nao dos ficheitos dentro de um folder chamado "dist"
    return gulp.src( globs, { base: './dist/', buffer: false } )
        //.pipe( conn.newer( '/' ) ); // only upload newer files
        .pipe( conn.dest( '/' ) );
});

//optimize images
gulp.task('optimize-images', function(cb) {
    gulp.src(['app/media/projects/**/*.png','app/media/projects/**/*.jpg','app/media/projects/**/*.gif','app/media/projects/**/*.jpeg']).pipe(imageop({
        optimizationLevel: 7,
        progressive: true,
        interlaced: true

    //destiny of optimized images
    })).pipe(gulp.dest('dist/media/projects')).on('end', cb).on('error', cb);
});


// inject bower components
gulp.task('wiredep', function () {
  var wiredep = require('wiredep').stream;

  gulp.src('app/css/*.scss')
    .pipe(wiredep({
      ignorePath: /^(\.\.\/)+/
    }))
    .pipe(gulp.dest('app/css'));

  gulp.src(['app/*.php','app/**/**/*.php','app/*.html','app/**/**/*.html'])
  //gulp.src('app/*.html')
    .pipe(wiredep({
      // exclude: ['bootstrap-sass-official'],
      ignorePath: /^(\.\.\/)*\.\./
    }))
    .pipe(gulp.dest('app'));
});

//tirei o jshint pq estava a dar erro com o jquery
gulp.task('build', ['javascript', 'stylesheet', 'html','images', 'fonts', 'extras'], function () {
  return gulp.src('dist/**/*').pipe($.size({title: 'build', gzip: true}));
});

gulp.task('default', ['clean'], function () {
  gulp.start('build');
});
