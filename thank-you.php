<?php include 'header.php'; ?>
<div class="container-narrow cart-wrapper checkout-wrapper">
	<div class="steps step-review">
		<a href="checkout.php" class="information">Information</a>
		<a href="" class="payment">Payment</a>
		<a href="thank-you.php" class="review">Review</a>
	</div>

	<div class="thank-you-text">
		<h3>Thank you!</h3>
		<p>Thank you for placing your order. We hope you have a wonderful time at Tumbles!</p>
	</div>

	<div class="recommended-boxes">
		<h3>Recommended</h3>

				<div class="flex flex-space-between">
					<div class="recommended-box flex flex-space-between">
						<div class="recommended-box-left">
							<h4>parties</h4>
							<a href="#">Go to Calendar</a>
						</div>

						<div class="recommended-box-right">
							<span>Starting at <b>$300.00</b></span>
							<a href="#">More info <i class="fas fa-chevron-down"></i></a>
						</div>
					</div>

					<div class="recommended-box flex flex-space-between">
						<div class="recommended-box-left">
							<h4>camps</h4>
							<a href="#">Go to Calendar</a>
						</div>

						<div class="recommended-box-right">
							<span>Starting at <b>$500.00</b></span>
							<a href="#">More info <i class="fas fa-chevron-down"></i></a>
						</div>
					</div>
				</div>
	</div>

	<div class="text-center back-to-calendar">
		<a href="#" class="btn"><i class="far fa-calendar"></i> Back to Calendar</a>
	</div>
</div>
<?php include 'footer.php';?>
