<div class="page-sections">
	<div class="container">
		<div class="page-section flex">
			<div class="img-wrap">
				<img src="<?php echo $base_url; ?>/assets/images/dynamic/page-section1.jpg">

				<?php if ( $file_name == 'about-us.php' ): ?>
					<img src="<?php echo $base_url; ?>/assets/images/dynamic/page-section1.jpg" class="small-img">
				<?php endif; // is about-us.php?>
			</div>

			<div class="page-section_text">
				<h2 class="section-title">Parent / Child Classes</h2>
				<h4>Classes for ages 4 months to 3 years</h4>
				<p>Even Squeakers have a lot to say and Tumbles loves to listen. In this class, children ages 4 to 10 months learn how to crawl through tunnels, ride on cool toys, do thumb pull-ups, manipulate objects and follow along with songs.</p>

				<?php if ( $file_name != 'about-us.php' ): ?>
				<a href="#" class="btn">View class details</a>
				<?php endif; // not about-us.php?>
			</div>
		</div><!-- page-section -->


<?php if ( $file_name != 'about-us.php' ): ?>
		<div class="page-section flex">
			<div class="img-wrap">
				<img src="<?php echo $base_url; ?>/assets/images/dynamic/page-section2.jpg">
			</div>

			<div class="page-section_text">
				<h2 class="section-title">Pre-K Gymnastics & Sports Prep</h2>
				<h4>Classes forages  3 years to 6 years</h4>
				<p>Even Squeakers have a lot to say and Tumbles loves to listen. In this class, children ages 4 to 10 months learn how to crawl through tunnels, ride on cool toys, do thumb pull-ups, manipulate objects and follow along with songs.</p>
				<a href="#" class="btn">View class details</a>
			</div>
		</div><!-- page-section -->

		<div class="page-section flex">
			<div class="img-wrap">
				<img src="<?php echo $base_url; ?>/assets/images/dynamic/page-section3.jpg">
			</div>

			<div class="page-section_text">
				<h2 class="section-title">Grade School Gymnastics & Sports Prep</h2>
				<h4>Classes for ages 6 years to 12 years</h4>
				<p>Even Squeakers have a lot to say and Tumbles loves to listen. In this class, children ages 4 to 10 months learn how to crawl through tunnels, ride on cool toys, do thumb pull-ups, manipulate objects and follow along with songs.</p>
				<a href="#" class="btn">View class details</a>
			</div>
		</div><!-- page-section -->

<?php endif; // not about-us.php?>

	</div><!-- container -->
</div><!-- page-sections -->
