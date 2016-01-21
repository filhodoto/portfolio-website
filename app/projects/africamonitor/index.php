
<?php
	require($_SERVER["DOCUMENT_ROOT"] . '/config.php');
	
	$project = 'africamonitor';
?>


<!doctype html>
<html class="no-js" lang="">
    <!-- head -->	
	<?php require( $root .'/layouts/head.php'); ?>
	
	<body id="project">
		
		<!-- projects header -->
		<?php require( $root . '/layouts/header.php'); ?>
		
		<main>
			<!-- bg image -->
			<aside>&nbsp;</aside>
			
			<article>
				<section>
					<div>
						<h1>
							<!-- call title by concatenating the project var defined on top + 'T' which gives the respective var defined in projects.content.php e.g: africamonitorT -->
							<?php echo ${$project}['title'] ?>
						</h1>
						<h2><?php echo ${$project}['sub-title'] ?></h2>
						<?php echo ${$project}['content'] ?>
						
						<p>
							<span>Technologies:</span> <?php echo ${$project}['tech'] ?>
						</p>
						<a class="btn" href="<?php echo ${$project}['site'] ?>" target="_blank">view website</a>
					</div>
					<ul>
					    <li>
						    <figure><img data-original="/media/projects/<?php echo $project; ?>/1.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/1.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/2.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/2.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/3.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/3.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/4.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/4.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/5.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/5.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/6.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/6.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/7.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/7.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/8.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/8.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/9.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/9.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/10.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/10.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/11.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/11.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/12.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/12.jpg" width="1024" height="640"></noscript></figure></li>
					    <li><figure><img data-original="/media/projects/<?php echo $project; ?>/13.jpg" alt="" width="1024" height="640" /><noscript><img src="/media/projects/<?php echo $project; ?>/13.jpg" width="1024" height="640"></noscript></figure></li>
					</ul>					
				</section>
			</article>
						
		</main>
		
		<?php include( $root .'/layouts/projects.footer.php'); ?>		
	</body>
</html>
