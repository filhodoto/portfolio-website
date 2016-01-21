<?php

$project = $_SESSION['project'];
?>


<div>
	<h1>
		<?php echo ${$project}['title'] ?>
	</h1>
	<h2><?php echo ${$project}['sub-title'] ?></h2>
	<?php echo ${$project}['content'] ?>

	<p>
		<span>Technologies:</span> <?php echo ${$project}['tech'] ?>
	</p>
	<a class="btn" href="<?php echo ${$project}['site'] ?>" target="_blank">view website</a>
</div>
<figure>
	<img data-original="/media/projects/<?php echo $project; ?>/1.jpg" alt="" width="530" height="331" />
	<noscript><img src="/media/projects/<?php echo $project; ?>/1.jpg" alt="" width="530" height="331" /></noscript>
	<a href="/projects/<?php echo $project; ?>/"><p>View more</p></a>
</figure>
