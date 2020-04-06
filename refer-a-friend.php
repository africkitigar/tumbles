<?php include 'header.php'; ?>
<?php include 'template-parts/hero-section.php'; ?>
<?php include 'template-parts/intro-section.php'; ?>


<div class="container contact-form refer-friend">
	<div class="row">
		<div class="col6 socials text-center">
			<p>Invite Friends On Your</p>
			<h3>Social Networks</h3>

			<div class="flex flex-center">
				<a href="#" target="_blank" class="facebook">
					<i class="fab fa-facebook-f"></i>
				</a>

				<a href="#" target="_blank" class="instagram">
					<i class="fab fa-instagram"></i>
				</a>

				<a href="#" target="_blank" class="twitter">
					<i class="fab fa-twitter"></i>
				</a>
			</div>
		</div>
		<div class="col6">
			<div class="text-center">
				<p>Or Invite Your Friends</p>
				<h3>By Email</h3>
			</div>
			<form action="">
				<div class="small">*Indicates required field</div>

				<div class="form-item">
					<label for="your-name">Your Name*</label>
					<input type="text" name="your-name" id="your-name" placeholder="Enter your name">
				</div>

				<div class="form-item">
					<label for="friends-name">Friend’s Name*</label>
					<input type="email" name="friends-name" id="friends-name" placeholder="Enter friend’s name">
				</div>

				<div class="form-item">
					<label for="friends-email">Friend’s Email*</label>
					<input type="email" name="friends-email" id="friends-email" placeholder="Enter friend’s email address">
				</div>

				<div class="form-item">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="I thought you might want to join me at Tumbles!"></textarea>
				</div>

				<div class="text-center">
					<button type="submit" class="btn">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php include 'footer.php';?>
