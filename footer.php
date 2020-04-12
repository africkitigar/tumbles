				</div>
		<!-- /body-content -->


		</div>
		<!-- /wrapper -->
<?php
$myAccountArray = array("my-profile.php");
$checkoutArray = array("cart.php", "checkout.php");
if ( !in_array( $file_name, $checkoutArray) ):
if ( !in_array( $file_name, $myAccountArray) ): ?>
			<div class="footer-slider">
				<div class="container">
					<div class="bullets-section">
						<h2 class="section-title square-circle">What parents & kids are saying about Tumbles</h2>
				       <!-- Add Pagination -->
				        <div class="swiper-pagination"></div>
				    </div>
    <div class="swiper-container">

			
        <div class="swiper-wrapper">

            <div class="swiper-slide">
            	<style>
			           .footer-slider .swiper-pagination-bullet:nth-child(1)  {
			            background: url(<?php echo $base_url; ?>/assets/images/dynamic/footer-hero.jpg) no-repeat;
			           } 
			    </style>  
            	<div class="flex">
	            	<div class="slide-text-box">  
	            		<div>              
		                    <div class="slide-text-box_inner">
								I love it because it allows me to have the flexibility with my family. I have two kids and I can bring them to work with me if I want to. As an owner of the business I can plan my schedule around my family.”
		                    </div>
						<h3>-Michelle and Brandan</h3>
						</div>   
	                </div>
	            	
		
	                <img src="<?php echo $base_url; ?>/assets/images/dynamic/footer-hero.jpg" />
                
                </div>
            </div>

            <div class="swiper-slide">
            	<style>
		           .footer-slider .swiper-pagination-bullet:nth-child(2)  {
		            background: url(<?php echo $base_url; ?>/assets/images/dynamic/footer-slide.jpg) no-repeat;
		           } 
		        </style>  

               
                <div class="flex">
	                <div class="slide-text-box">
	                	<div>
		                	<div class="slide-text-box_inner">
								I love it because it allows me to have the flexibility with my family. I have two kids and I can bring them to work with me if I want to. As an owner of the business I can plan my schedule around my family.”
		                    </div>
		                    <h3>John Doe</h3>    
	                    </div>                
	                </div>

	                 <img src="<?php echo $base_url; ?>/assets/images/dynamic/footer-slide.jpg" />
                 </div>
            </div>

    </div><!-- swiper-wrapper -->
       
    </div><!-- swiper-container -->

    



    
				</div><!-- container -->
			</div><!-- footer-slider -->

			<div class="footer-newsletter flex flex-center">
				<img src="<?php echo $base_url; ?>/assets/images/mail-box.svg">
				<div class="footer-newsletter_inner">
					<h3>Join the mailing list!</h3>

					<p>Subscribe to our mailing list to get updates about our classes, camps and promotions.</p>

					<div class="newsletter-form flex">
						<input type="text" class="newsletter-email" placeholder="Enter your email">
						<button type="submit"><i class="fas fa-envelope"></i></button>
					</div>
				</div>
			</div><!-- footer-newsletter -->
<?php endif; //my-account array?>
			<div class="footer-hero">
				<img src="<?php echo $base_url; ?>/assets/images/dynamic/footer-hero.jpg">
			</div><!-- footer-hero -->

			<!-- footer -->
			<footer class="footer">

				<div class="footer-top">
					<div class="container flex flex-space-between">
						<ul class="footer-top-menu">
							<li>
								<a href="gym-classes.php">Gym Classes</a>
								<ul class="submenu">
									<li><a href="">Parent / Child </a></li>
									<li><a href="#">Pre-K Gymnastics & Sports Prep</a></li>
									<li><a href="#">Grade School Gymnastics & Sports Prep</a></li>
								</ul>
							</li>
						</ul>

						<ul class="footer-top-menu">
							<li><a href="#">Steam Classes</a></li>
							<li><a href="#">Parties & Camps</a></li>
							<li><a href="#">Calendar</a></li>
						</ul>

						<ul class="footer-top-menu">
							<li><a href="refer-a-friend.php">Refer a friend</a></li>
							<li><a href="jobs.php">Careers</a></li>
							<li><a href="about-us.php">About Us</a></li>
						</ul>

						<ul class="footer-top-menu">
							<li><a href="#">Blog</a></li>
							<li><a href="contact-us.php">Contact us</a></li>
							<li><a href="#">Own a gym</a></li>
						</ul>
					</div><!-- /container -->
				</div><!-- footer-top -->

				<div class="footer-middle">
					<div class="container flex flex-space-between flex-wrap">
						<div class="footer-column">
							<h6>Address</h6>
							<p>Tumbles Johns Creek <br>
							3005 Old Alabama Road, Suite 20, Johns Creek, Georgia, 30022 <br>
							678-691-4072 <br>
							johnscreek@tumbles.net</p>
						</div>
						<div class="footer-column">
							<h6> Payments safely verified by: </h6>
							<img src="<?php echo $base_url; ?>/assets/images/stripe.png" alt="Stripe" class="stripe-footer">

							<h6>We accept:</h6>
							<img src="<?php echo $base_url; ?>/assets/images/visa-mastercard.png" alt="visa-mastercard">
						</div>
						<div class="footer-column">
							<h6>Franchise opportunities</h6>
							<p>Want a franchise? Get started now by requesting more information.</p>
							<a href="#" class="btn">Get more info</a>
						</div>
					</div><!-- /container -->
				</div><!-- footer-middle -->

				<div class="footer-bottom">
					<div class="container flex">
						<span class="copyright">© Copyright 2020 - Tumbles Independently owned and operated by Atlanta Tumbles LLCx</span>

						<ul class="footer-bottom-menu">
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>	<!-- /container -->
				</div><!-- footer-bottom -->


					<a href="javascript:void(0)" id="return-to-top" class="text-center"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7"><g><g><path fill="#2a2a32" d="M0 5.605L5.5-.001 11 5.605 9.626 7.007 5.5 2.802 1.375 7.007z"/><path fill="#fff" d="M0 5.605L5.5-.001 11 5.605 9.626 7.007 5.5 2.802 1.375 7.007z"/></g></g></svg></a> <!-- back to top -->

			</footer>
			<!-- /footer -->
<?php endif; //checkout array?>
		</div>
		<!-- /wrapper -->


		<script
		  src="https://code.jquery.com/jquery-3.4.1.min.js"
		  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		  crossorigin="anonymous"></script>
		 <script src="<?php echo $base_url; ?>/assets/js/swiper.min.js"></script>
		 <script src="<?php echo $base_url; ?>/assets/js/custom.min.js"></script>
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
	</body>
</html>


