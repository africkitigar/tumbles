<?php include 'header.php'; ?>

<div class="container cart-wrapper checkout-wrapper">
	<div class="row">
		<div class="col8">
			<div class="steps">
				<a href="" class="information">Information</a>
				<a href="checkout-payment.php" class="payment">Payment</a>
				<a class="review">Review</a>
			</div>

			<?php include 'template-parts/checkout-information.php'; ?>

		</div>

		<div class="col4 cart-sidebar">
			<h3>Cart Totals</h3>
			<div class="cart-totals">
				<div class="cart-totals-row">
					<div class="label">
						Subtotal:
					</div>
					<div class="value">
						$285.00
					</div>
				</div> <!-- /cart-totals-row -->

				<div class="cart-totals-row">
					<div class="label">
						Tax:
					</div>
					<div class="value">
						$34.20
					</div>
				</div> <!-- /cart-totals-row -->

				<div class="cart-totals-row sum">
					<div class="label">
						Total:
					</div>
					<div class="value">
						$319.20
					</div>
				</div> <!-- /cart-totals-row -->
			</div><!-- /cart-totals -->

			<div class="info-box">
				Are you a member of Tumbles? If not, there might be a Family Membership fee of $75.
			</div>

			<a href="checkout.php" class="btn">Proceed to Checkout</a>

			<div class="secure-checkout">
				<div class="flex flex-center flex-vertical-center"><img src="<?php echo $base_url; ?>/assets/images/lock.svg"> Secure Checkout</div>

				<div class="flex flex-space-between">
					<div class="text-center">
						<h6>Payments safely <br> verified by: </h6>
						<img src="<?php echo $base_url; ?>/assets/images/stripe.png" alt="Stripe" class="stripe-footer">
					</div>

					<div class="text-center">
						<h6>We accept:</h6>
						<img src="<?php echo $base_url; ?>/assets/images/visa-mastercard.png" alt="visa-mastercard">
					</div>
				</div>
			</div>
		</div> <!-- /cart-sidebar -->
	</div>
</div>


<?php include 'footer.php';?>
