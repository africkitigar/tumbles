<?php include 'header.php'; ?>

<div class="container cart-wrapper checkout-wrapper">
	<div class="row">
		<div class="col8">
			<div class="steps step-payment">
				<a href="checkout.php" class="information">Information</a>
				<a href="" class="payment">Payment</a>
				<a href="thank-you.php" class="review">Review</a>
			</div>

			<?php include 'template-parts/checkout-payment.php'; ?>

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

			<div class="form-item checkbox">
				<label for="terms">
					<input type="checkbox" name="terms" id="terms" >
					<span>Yes, I accept the <a href="#" target="_blank">Terms of service</a></span>
				</label>
			</div>

			<a href="thank-you.php" class="btn">Pay Now</a>

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
