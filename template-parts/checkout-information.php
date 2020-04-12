			<div class="sign-in-box">
				Tumbles members, <a href="#">sign in</a> for faster checkout!
			</div>

			<div class="order-summary">
				<h4>Order Summary</h4>

				<div class="order-summary-items">
					<div class="order-summary-item">
						<div class="flex flex-space-between">
							<div class="service flex">
								<div class="label">Service:</div>
								<div class="value">Wobblers</div>
							</div>

							<div class="date-time">
								<span class="day">Monday</span>
								<i class="far fa-clock"></i>
								<span class="time"> 10am - 11:30am </span>
							</div>

							<div class="duration">
								<span class="label">Duration:</span>
								<span class="value">Month</span>
							</div>

						</div>

						<div class="flex flex-space-between">
							<span class="child flex flex-vertical-center">
								Child:
								<input type="text" value="David Smith">
							</span>

							<div class="quantity-value">Quantity: <span>1</span></div>
						</div>

						<div class="flex sum flex-space-between">
							<div class="price">Price: <span  class="value">$190.00</span></div>
						</div>
					</div><!-- /order-summary-item -->

					<div class="order-summary-item">
						<div class="flex flex-space-between">
							<div class="service flex">
								<div class="label">Service:</div>
								<div class="value">Wobblers</div>
							</div>

							<div class="date-time">
								<span class="day">Monday</span>
								<i class="far fa-clock"></i>
								<span class="time"> 10am - 11:30am </span>
							</div>

							<div class="duration">
								<span class="label">Duration:</span>
								<span class="value">Month</span>
							</div>

						</div>

						<div class="flex flex-space-between">
							<span class="child flex flex-vertical-center">
								Child:
								<input type="text" value="David Smith">
							</span>

							<div class="quantity-value">Quantity: <span>1</span></div>
						</div>

						<div class="flex sum flex-space-between">
							<div class="price">Price: <span  class="value">$190.00</span></div>
						</div>
					</div><!-- /order-summary-item -->
				</div><!-- /order-summary-items -->
			</div><!-- /order-summary -->

			<div class="summary-information">
				<h2>Information:</h2>

				<form action="">
					<div class="form-item-row">
						<div class="form-item half">
							<label for="parent-first-name">Parent First Name*</label>
							<input type="text" name="parent-first-name" id="parent-first-name" placeholder="Enter your first name">
						</div>

						<div class="form-item half">
							<label for="parent-last-name">Parent Last Name*</label>
							<input type="text" name="parent-last-name" id="parent-last-name" placeholder="Enter your last name">
						</div>
					</div> <!-- /form-item-row -->
				</form>

				<div class="flex flex-vertical-center">
					<span class="label">Number of children:</span>
					<div class="quantity">
						<div class="flex">
							<span class="minus"><i class="fas fa-minus"></i></span>
							<input type="number" pattern="[0-9]*" id="spinner" name="value" value="1" min="1" max="200" step="1" maxlength="3">
							<span class="plus"><i class="fas fa-plus"></i></span>
						</div>
					</div>
				</div>
			</div><!-- /summary-information -->
