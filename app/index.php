<!-- file where we define $root variable -->
<?php require($_SERVER["DOCUMENT_ROOT"] . '/config.php'); ?>

<!doctype html>
<html class="no-js" lang="">
	<?php require( $root .'/layouts/head.php'); ?>
	
	<body id="home">
		<?php require( $root .'/layouts/header.php'); ?>

		<main>
			<!-- bg image -->
			<aside>&nbsp;</aside>
			
			<article id="intro" itemscope itemtype="http://schema.org/Article">
				<section>
					<div>
						<h1 itemprop="name">
							<!-- I create web things -->
							Hi there! My name is <mark>Gonçalo</mark>, I'm a freelance <mark>webdesigner</mark> and <mark>front-end developer</mark>
						</h1>
						<h2 itemprop="articleBody">
		I like to craft interesting and beautiful projects for the web. <br/> I have a working background in web agencies that has allowed me to develop responsive web projects and engaging layouts for small and medium sized businesses, while working with very competent teams.
						</h2>
		
						<ul>
							<li><a class="btn mail" href="mailto:meet@goncaloramalho.com">Get in touch</a></li>
							<li><a itemprop="url" class="btn tools" href="#">See my work</a></li>
						</ul>
						<!-- call social links layout -->
						<?php include( $root .'/layouts/social.links.php'); ?>						
					</div>
				</section>
			</article>
		
			<!-- work -->
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
						
				<section>
					<!-- call template with projects html and pass variable that will make the content change according to project -->
					<?php
						$_SESSION['project'] = 'voss';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				<span class="tooltip" data-tipsy="There's more!">&nbsp;</span>
				<!-- <a class="arrow down" href="#"></a> -->
			</article>
			
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
				
				<section>
					<?php
						$_SESSION['project'] = 'cowork';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				
			</article>
			
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
				
				<section>
					<?php
						$_SESSION['project'] = 'mishka';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				
			</article>
			
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
				
				<section>
					<?php
						$_SESSION['project'] = 'whitebrasserie';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				
			</article>
			
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
				
				<section>
					<?php
						$_SESSION['project'] = 'intone';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				
			</article>
			
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
				
				<section>
					<?php
						$_SESSION['project'] = 'ined';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				
			</article>
			
			<article class="project" itemscope itemtype="http://schema.org/WebSite">
				
				<section>
					<?php
						$_SESSION['project'] = 'africamonitor';
						
						include( $root .'/layouts/home.projects.php');
					?>				
				</section>
				
			</article>
			
			<article class="project extras" itemscope itemtype="http://schema.org/Article">
				
				<section>
					<div>
						<h1>
							<?php echo $extras['title'] ?>
						</h1>
						<?php echo $extras['content'] ?>
					</div>
					
				    <ul>
				        <li itemscope itemtype="http://schema.org/VisualArtwork">
				            <figure>
				                <img data-original="/media/projects/extras/mobile/thumb.jpg" alt="" width="170" height="138"/>
				                <noscript><img itemprop="image" src="/media/projects/extras/mobile/thumb.jpg" alt="" width="170" height="138"></noscript>
				                <a class="ajax" href="/media/projects/extras/mobile/site/index.html" title="Web design" data-info="Design of homepage for a mobile app">
					                 <p>view more</p>					                
				                </a>
				            </figure>
				        </li>
				
				        <li itemscope itemtype="http://schema.org/VisualArtwork">
				            <figure>
				                <img data-original="/media/projects/extras/samu/thumb.jpg" alt="" width="170" height="138"/>
				                <noscript><img itemprop="image" src="/media/projects/extras/samu/thumb.jpg" alt="" width="170" height="138" /></noscript>
				                <a href="/media/projects/extras/samu/max.jpg" title="Illustration" data-info="Typographical portrait">
					                <p>view more</p>
				                </a>
				            </figure>
				        </li>
				
				        <li itemscope itemtype="http://schema.org/VisualArtwork">
				            <figure>
				                <img data-original="/media/projects/extras/dali/thumb.jpg" alt="" width="170" height="138"/>
				                <noscript><img itemprop="image" src="/media/projects/extras/dali/thumb.jpg" alt="" width="170" height="138" /></noscript>
				                <a href="/media/projects/extras/dali/max.jpg" title="Illustration" data-info="Typographical portrait">
					                <p>view more</p>
				                </a>
				            </figure>
				        </li>
				
				        <li itemscope itemtype="http://schema.org/VisualArtwork">
				            <figure>
				                <img data-original="/media/projects/extras/torneio/thumb.jpg" alt="" width="170" height="138"/>
				                <noscript><img itemprop="image" src="/media/projects/extras/torneio/thumb.jpg" alt="" width="170" height="138" /></noscript>
				                <a href="/media/projects/extras/torneio/max.jpg" title="Illustration" data-info="Typographical portrait">
					                <p>view more</p>
				                </a>
				            </figure>
				        </li>
				
				        <li itemscope itemtype="http://schema.org/VisualArtwork">
				            <figure>
				                <img data-original="/media/projects/extras/london/thumb.jpg" alt="" width="170" height="138"/>
				                <noscript><img itemprop="image" src="/media/projects/extras/london/thumb.jpg" alt="" width="170" height="138" /></noscript>
				                <a href="/media/projects/extras/london/max.jpg" title="Illustration" data-info="Typographical portrait">
					                <p>view more</p>
				                </a>
				            </figure>
				        </li>
				
				        <li itemscope itemtype="http://schema.org/VisualArtwork">
				            <figure>
				                <img data-original="/media/projects/extras/coffee/thumb.jpg" alt="" width="170" height="138"/>
				                <noscript><img itemprop="image" src="/media/projects/extras/coffee/thumb.jpg" alt="" width="170" height="138" /></noscript>
				                <a href="/media/projects/extras/coffee/max.jpg" title="Illustration" data-info="Typographical portrait">
					                <p>view more</p>
				                </a>
				            </figure>
				        </li>
				    </ul>
					
				</section>
				
			</article>
			
		</main>
		
		<footer>
			<section><?php echo $copyright ?></section>
		</footer>
		
		
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<script>
		  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		  e.src='//www.google-analytics.com/analytics.js';
		  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		  ga('create','UA-37476752-1');ga('send','pageview');
		</script>
		
		<!-- watch:js js/vendor.js -->
		<!-- build:js js/vendor.js -->
		<!-- bower:js -->
		<script src="/bower_components/modernizr/modernizr.js"></script>
		<script src="/bower_components/jquery/dist/jquery.js"></script>
		<script src="/bower_components/jquery.scrollTo/jquery.scrollTo.js"></script>
		<script src="/bower_components/magnific-popup/dist/jquery.magnific-popup.js"></script>
		<script src="/bower_components/waypoints/lib/jquery.waypoints.js"></script>
		<script src="/bower_components/jquery_lazyload/jquery.lazyload.js"></script>
		<script src="/bower_components/lazyloadxt/dist/jquery.lazyloadxt.min.js"></script>
		<!-- endbower -->
		<!-- endbuild -->
		
		<!-- build:js js/main.js -->
			<script src="js/main.js"></script>
		<!-- endbuild -->

	</body>
</html>
