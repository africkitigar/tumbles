<?php include 'header.php'; ?>

<div class="container cart-wrapper">
	<div class="row">
		<div class="col8">
			<div class="product-item-box">
				<div class="product-item-box_header">
					<div class="service">
						<div class="label">Service:</div>
						<div class="value">Wobblers</div>
					</div>

					<div class="date-time">
						<span class="day">Monday</span>
						<i class="far fa-clock"></i>
						<span class="time"> 10am - 11:30am </span>
					</div>

					<i class="fas fa-times"></i>
				</div>


				<div class="product-item-box_body">
					<div class="duration">
						<div class="label">Duration:</div>
						<select name="duration" id="duration">
							<option value="month">Month</option>
							<option value="day">Day</option>
						</select>
					</div>

					<div class="quantity">
						<div class="label">Quantity:</div>
						<div class="flex">
							<span class="minus"><i class="fas fa-minus"></i></span>
							<input type="number" pattern="[0-9]*" id="spinner" name="value" value="1" min="1" max="200" step="1" maxlength="3">
							<span class="plus"><i class="fas fa-plus"></i></span>
						</div>
					</div>

					<div class="price">
						<div class="flex flex-space-between">
							<div class="label">Price:</div>
							<span class="price-value">$95.00</span>
						</div>

						<div class="sum flex">
							<span class="label">Total:</span>
							<span class="total-price">$95.00</span>
						</div>
					</div>
				</div>
			</div> <!-- /product-item-box -->


			<div class="product-item-box">
				<div class="product-item-box_header">
					<div class="service">
						<div class="label">Service:</div>
						<div class="value">SUPER WIGGLERS</div>
					</div>

					<div class="date-time">
						<span class="day">Monday</span>
						<i class="far fa-clock"></i>
						<span class="time"> 10am - 11:30am </span>
					</div>

					<i class="fas fa-times"></i>
				</div>


				<div class="product-item-box_body">
					<div class="duration">
						<div class="label">Duration:</div>
						<select name="duration" id="duration">
							<option value="month">Month</option>
							<option value="day">Day</option>
						</select>
					</div>

					<div class="quantity">
						<div class="label">Quantity:</div>
						<div class="flex">
							<span class="minus"><i class="fas fa-minus"></i></span>
							<input type="number" pattern="[0-9]*" id="spinner" name="value" value="1" min="1" max="200" step="1" oninput="maxLengthCheck(this)" maxlength="3">
							<span class="plus"><i class="fas fa-plus"></i></span>
						</div>
					</div>

					<div class="price">
						<div class="flex flex-space-between">
							<div class="label">Price:</div>
							<span class="price-value">$95.00</span>
						</div>

						<div class="sum flex">
							<span class="label">Total:</span>
							<span class="total-price">$95.00</span>
						</div>
					</div>
				</div>
			</div> <!-- /product-item-box -->

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
