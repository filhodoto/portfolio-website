
————————————————————————————————————————————————

You’ve found the code to my portfolio Website. 

Check it out here htt://goncaloramalho.com

————————————————————————————————————————————————

“Use the force Harry”

- Gandalf


## Features

* Browserify + ES6 (babelify)
* Pick your favorite CSS pre-processor (Sass, Stylus or Less)
* CSS Autoprefixing
* Sourcemaps for CSS and JavaScript
* Built-in preview server with BrowserSync
* Image optimization
* Wire-up dependencies installed with [Bower](http://bower.io)

You may opt-out from using bower, sprite generation and image optimization if
you don't need them.

#### Sprite sheet

For sprite generation, you'll need to create a directory for each sprite
category on `app/images/sprites/`. It will generate its respective stylesheet
and sprite sheet files as the following:

- `app/images/sprites/general/*.png` generates:
  - `css/sprites/general.styl`
  - `images/sprites_general.png`
- `app/images/sprites/heavy_stuff/*.png` generates:
  - `css/sprites/heavy_stuff.styl`
  - `images/sprites_heavy_stuff.png`

See [gulpfile.js] for more information.

*For more information on what this generator can do for you, take a look at the [gulp plugins](app/templates/_package.json) used in our `package.json`.*

## Getting Started

- Run `npm start` to preview and watch for changes
- Run `bower install --save <package>` to install frontend dependencies
- Run `gulp` to build for production

## Bower components

This generator includes the following Bower components by default:

- Modernizr
- normalize.css

Read the [details](docs/bower.md) about our Bower setup.

## Options

- `--skip-install`
  Skips the automatic execution of `bower` and `npm` after scaffolding has finished.
