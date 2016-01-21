 <?php require($_SERVER["DOCUMENT_ROOT"] . '/config.php'); ?> <!doctype html> <html class=no-js> <?php require( $root .'/layouts/head.php'); ?> <body id=home> <?php require( $root .'/layouts/header.php'); ?> <main>  <aside>&nbsp;</aside> <article id=intro> <section> <div> <h1>  Hi there! My name is <mark>Gonçalo</mark>, I'm a freelance <mark>webdesigner</mark> and <mark>front-end developer</mark> </h1> <h2> I like to craft interesting and beautiful projects for the web. <br> I have a working background in web agencies that has allowed me to develop responsive web projects and engaging layouts for small and medium sized businesses, while working with very competent teams. </h2> <ul> <li><a class="btn mail" href=mailto:meet@goncaloramalho.com>Get in touch</a></li> <li><a class="btn tools" href=#>See my work</a></li> </ul> <ol> <li><a class=linkedin href=https://www.linkedin.com/in/gtramalho target=_blank><span>linkedin</span></a></li> <li><a class=twitter href=https://twitter.com/_goncalo target=_blank><span>twitter</span></a></li> <li><a class=instagram href="https://instagram.com/goncalo_ramalho/" target=_blank><span>instagram</span></a></li> </ol> </div> </section> </article>  <article class=project> <section>  <?php
						$_SESSION['project'] = 'voss';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> <span class=tooltip data-tipsy="There's more!">&nbsp;</span>  </article> <article class=project> <section> <?php
						$_SESSION['project'] = 'cowork';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> </article> <article class=project> <section> <?php
						$_SESSION['project'] = 'mishka';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> </article> <article class=project> <section> <?php
						$_SESSION['project'] = 'whitebrasserie';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> </article> <article class=project> <section> <?php
						$_SESSION['project'] = 'intone';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> </article> <article class=project> <section> <?php
						$_SESSION['project'] = 'ined';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> </article> <article class=project> <section> <?php
						$_SESSION['project'] = 'africamonitor';
						
						include( $root .'/layouts/home.projects.php');
					?> </section> </article> <article class="project extras"> <section> <div> <h1> <?php echo $extras['title'] ?> </h1> <?php echo $extras['content'] ?> </div> <ul> <li> <figure> <img data-original=/media/projects/extras/mobile/thumb.jpg width=170 height=138> <noscript><img src=/media/projects/extras/mobile/thumb.jpg width=170 height=138></noscript> <a class=ajax href=/media/projects/extras/mobile/site/index.html title="Web design" data-info="Design of homepage for a mobile app"> <p>view more</p> </a> </figure> </li> <li> <figure> <img data-original=/media/projects/extras/samu/thumb.jpg width=170 height=138> <noscript><img src=/media/projects/extras/samu/thumb.jpg width=170 height=138></noscript> <a href=/media/projects/extras/samu/max.jpg title=Illustration data-info="Typographical portrait"> <p>view more</p> </a> </figure> </li> <li> <figure> <img data-original=/media/projects/extras/dali/thumb.jpg width=170 height=138> <noscript><img src=/media/projects/extras/dali/thumb.jpg width=170 height=138></noscript> <a href=/media/projects/extras/dali/max.jpg title=Illustration data-info="Typographical portrait"> <p>view more</p> </a> </figure> </li> <li> <figure> <img data-original=/media/projects/extras/torneio/thumb.jpg width=170 height=138> <noscript><img src=/media/projects/extras/torneio/thumb.jpg width=170 height=138></noscript> <a href=/media/projects/extras/torneio/max.jpg title=Illustration data-info="Typographical portrait"> <p>view more</p> </a> </figure> </li> <li> <figure> <img data-original=/media/projects/extras/london/thumb.jpg width=170 height=138> <noscript><img src=/media/projects/extras/london/thumb.jpg width=170 height=138></noscript> <a href=/media/projects/extras/london/max.jpg title=Illustration data-info="Typographical portrait"> <p>view more</p> </a> </figure> </li> <li> <figure> <img data-original=/media/projects/extras/coffee/thumb.jpg width=170 height=138> <noscript><img src=/media/projects/extras/coffee/thumb.jpg width=170 height=138></noscript> <a href=/media/projects/extras/coffee/max.jpg title=Illustration data-info="Typographical portrait"> <p>view more</p> </a> </figure> </li> </ul> </section> </article> </main> <footer> <section><?php echo $copyright ?></section> </footer>  <script>
		  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		  e.src='//www.google-analytics.com/analytics.js';
		  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		  ga('create','UA-37476752-1');ga('send','pageview');
		</script>  <script src=js/vendor.js></script> <script src=js/main.js></script> </body> </html> 