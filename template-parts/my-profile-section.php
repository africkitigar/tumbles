<div class="my-profile-section my-acount-main-section active">
	<h3>My profile</h3>

	<form action="">
		<div class="form-item-row">
			<div class="form-item half">
				<label for="your-name">Title*</label>
				<select name="title" id="title">
					<option value="mr">Mr</option>
					<option value="mrs">Mrs</option>
				</select>
			</div>
		</div><!-- /form-item-row -->

		<div class="form-item-row">
			<div class="form-item half">
				<label for="first-name">First name*</label>
				<input type="text" name="first-name" id="first-name" placeholder="Enter your first name">
			</div>

			<div class="form-item half">
				<label for="last-name">Last name*</label>
				<input type="text" name="last-name" id="last-name" placeholder="Enter your last name">
			</div>
		</div> <!-- /form-item-row -->

		<div class="form-item">
			<label for="email-name">Email*</label>
			<input type="email" name="email-name" id="email-name" placeholder="Enter your email">
		</div>

		<div class="form-item">
			<label for="cell-phone">Cell phone*</label>
			<input type="text" name="cell-phone" id="cell-phone" placeholder="Enter your cell phone">
		</div>

		<div class="form-item">
			<label for="home-phone">Home phone</label>
			<input type="text" name="home-phone" id="home-phone" placeholder="Enter your home phone">
		</div>

		<div class="form-item">
			<label for="work-phone">Work phone</label>
			<input type="text" name="work-phone" id="work-phone" placeholder="Enter your work phone">
		</div>

		<div class="form-item">
			<label for="country">Country*</label>
			<select name="country" id="country">
				<option value="USA">USA</option>
				<option value="Serbia">Serbia</option>
			</select>
		</div>

		<div class="form-item">
			<label for="state">State*</label>
			<select name="state" id="state">
				<option value="alabama">Alabama</option>
				<option value="california">California</option>
			</select>
		</div>

		<div class="form-item">
			<label for="address1">Address 1*</label>
			<input type="text" name="address1" id="address1" placeholder="Enter your address 1">
		</div>

		<div class="form-item">
			<label for="address2">Address 2</label>
			<input type="text" name="address2" id="address2" placeholder="Enter your address 2">
		</div>

		<div class="form-item">
			<label for="postal-code">Postal Code*</label>
			<input type="text" name="postal-code" id="postal-code" placeholder="Enter your postal code">
		</div>

		<div class="form-item checkbox">
			<label for="terms">
				<input type="checkbox" name="terms" id="terms" >
				<span>Yes, I accept the <a href="#" target="_blank">terms of service.</a></span>
			</label>
		</div>

		<div class="form-item checkbox">
			<label for="newsletter">
				<input type="checkbox" name="newsletter" id="newsletter" >
				<span>Yes, I would like to receive a newsletter.</span>
			</label>
		</div>

		<div class="form-item half">
			<input type="submit" value="Update" id="submit" class="btn">
		</div>
	</form>
</div>
