<?php
$pagesArray = array("refer-a-friend.php", "jobs.php", "my-profile.php"); ?>
<?php if ( in_array( $file_name, $pagesArray) ): ?>
<div class="hero short-hero">
<?php else: ?>
<div class="hero">
<?php endif; ?>
	<img src="<?php echo $base_url; ?>/assets/images/dynamic/footer-hero.jpg">
	<div class="hero_inner">
		<h1 class="animated fadeInUp">Kids Gym Classes for ages 4 months to 12 years</h1>
	</div>
</div>
