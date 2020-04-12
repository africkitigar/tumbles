<div class="order-summary step-payment">
	<h4>Order Summary</h4>

	<h2>Payment:</h2>

	<div class="person-row flex flex-space-between">
		<div class="label">Parent:</div>
		<div class="person-name">John Smith</div>
	</div>

	<div class="person-row flex flex-space-between">
		<div class="label">Child:</div>
		<div class="person-name">David Smith</div>
	</div>

	<div class="person-row flex flex-space-between">
		<div class="label">Child:</div>
		<div class="person-name">Jane Smith</div>
	</div>
</div>

<div class="payment-info">
	<div class="row">
		<div class="col6">
			<h3>Personal Info:</h3>
			<form action="">
				<div class="form-item">
					<label for="first-name">First name*</label>
					<input type="text" name="first-name" id="first-name" placeholder="Enter first name">
				</div>

				<div class="form-item">
					<label for="last-name">Last name*</label>
					<input type="text" name="last-name" id="last-name" placeholder="Enter last name">
				</div>
				<div class="form-item">
					<label for="email-name">Email*</label>
					<input type="email" name="email-name" id="email-name" placeholder="Enter email">
				</div>
				<div class="form-item">
					<label for="country">Country*</label>
					<input type="text" name="country" id="country" placeholder="Enter country">
				</div>
				<div class="form-item">
					<label for="city">City*</label>
					<input type="text" name="city" id="city" placeholder="Enter city">
				</div>
				<div class="form-item">
					<label for="address">Address*</label>
					<input type="text" name="address" id="address" placeholder="Enter address">
				</div>
				<div class="form-item">
					<label for="postal-code">Postal Code*</label>
					<input type="text" name="postal-code" id="postal-code" placeholder="Enter postal code">
				</div>
			</form>
		</div>
		<div class="col6 credit-card">
			<h3>Credit Card Info:</h3>

			<form action="">
				<div class="form-item">
					<input type="text" name="card-number" id="card-number" placeholder="0000 0000 0000 0000">
				</div>

				<div class="form-item">
					<input type="text" name="user-name" id="user-name" placeholder="John Smith">
				</div>

				<div class="form-item-row">
					<div class="form-item half">
						<input type="text" name="card-expire" id="card-expire" placeholder="00/00">
					</div>

					<div class="form-item half">
						<input type="text" name="secret" id="secret" placeholder="000">
					</div>
				</div> <!-- /form-item-row -->
			</form>
		</div>
	</div>
</div>
