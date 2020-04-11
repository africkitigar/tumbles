<div class="my-profile-section my-acount-main-section active">
	<h3>Students info</h3>

	<form action="">
		<h4 class="flex flex-space-between">
			<span>Student #1</span>
			<a class="remove" href="javascript:void(0)"><b>-</b> Remove student</a>
		</h4>

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

		<div class="form-item-row">
			<div class="form-item half">
				<label for="gender">Gender*</label>
				<select name="gender" id="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>

			<div class="form-item half">
				<label for="birthday">Birthday*</label>
				<input type="text" name="birthday" id="birthday" placeholder="Enter your birthday date">
			</div>
		</div> <!-- /form-item-row -->

		<div class="form-item">
			<label for="special-needs">Special needs</label>
			<input type="text" name="special-needs" id="special-needs" placeholder="Enter if there are some special needs">
		</div>

		<div class="form-item">
			<label for="alergy-info">Alergy info</label>
			<input type="text" name="alergy-info" id="alergy-info" placeholder="Enter if there are some alergies">
		</div>

		<div class="form-item-row flex flex-space-between flex-vertical-center">
			<div class="form-item half">
				<input type="submit" value="Update changes" id="submit" class="btn">
			</div>

			<span><a class="add-new" href="javascript:void(0)"><b>+</b> Add new student</a></span>
		</div> <!-- /form-item-row -->
	</form>
</div>
