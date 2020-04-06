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
					<textarea name="message" id="message" cols="30" rows="5" placeholder="You can write your message here"></textarea>
				</div>

				<div class="text-center">
					<button type="submit" class="btn">Submit</button>
				</div>
			</form>
		</div>
		<div class="col6">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4676.6726506298055!2d-84.275041776131!3d34.020599482664636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f5755528f6b305%3A0xcef64f04a8aa6ca0!2zMzAwNSBPbGQgQWxhYmFtYSBSZCAjMjAsIEFscGhhcmV0dGEsIEdBIDMwMDIyLCDQodGY0LXQtNC40ZrQtdC90LUg0JTRgNC20LDQstC1!5e0!3m2!1ssr!2srs!4v1586194674646!5m2!1ssr!2srs" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

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
