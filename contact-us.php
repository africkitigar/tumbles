<?php include 'header.php'; ?>
<?php include 'template-parts/intro-section.php'; ?>

<div class="container contact-form">
	<div class="row">
		<div class="col6">
			<form action="">
				<div class="small">*Indicates required field</div>

				<div class="form-item">
					<label for="your-name">Name*</label>
					<input type="text" name="your-name" id="your-name" placeholder="Enter your name">
				</div>

				<div class="form-item">
					<label for="your-email">Email*</label>
					<input type="email" name="your-email" id="your-email" placeholder="Enter your email addres">
				</div>

				<div class="form-item">
					<label for="your-subject">Subject*</label>
					<input type="text" name="your-subject" id="your-subject" placeholder="Enter subject">
				</div>

				<div class="form-item">
					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="You can write your message here"></textarea>
				</div>

				<div class="text-center">
					<button type="submit" class="btn">Submit</button>
				</div>
			</form>
		</div>
		<div class="col6">
			<img src="<?php echo $base_url; ?>/assets/images/dynamic/contact-map.png"  class="header-waves mobile-hide">

			<div class="contact-data">
				<div class="address flex">
					<i class="fas fa-map-marker-alt"></i> <span>3005 Old Alabama Road, Suite 20, Johns Creek, Georgia, 30022</span>
				</div>
				<div>
					<a href="tel:+18334967836" class="phone flex">
						<i class="fas fa-mobile-alt"></i> <span>+1 833 496 7836</span>
					</a>
				</div>
				<div>
					<a href="mailto:info@website.com" class="email flex">
						<i class="fas fa-envelope">	</i> <span>info@website.com</span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
