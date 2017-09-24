<?php

$about = get_page_by_title( 'About Us' );
$aboutUrl = site_url().'/'.$about->post_name;

get_header();
?>
<div class="top-banner home-section">
			<div class="container">
					<h3 class="bebasNeue par-smax uppercase bp-center">successful goat business venture is now within the reach of every Juan.</h3>
					<a href="#" class="btn-outline wht bp-center uppercase auto mt6">Click to know how</a>
			</div>
		</div><!-- !top banner -->
		<div class="about-us">
			<div class="gray-section container">
				<div class="col-sm-10 auto">
					<h3 class="dkGreen uppercase par-maxxx"><?php echo $about->post_title?></h3>
					<p class="dkGray par-xxlarge mt3"><?php echo $about->post_excerpt?></p>
					<a href="<?php echo $aboutUrl?>" class="btn-outline blk bp-center uppercase auto mt6">Learn more</a>
				</div>
			</div>
		</div><!-- !about us-->
		<div class="latest-news">
			<div class="container">
				<h3 class="white uppercase bp-center par-maxxx mb5">Latest News</h3>
				<div class="row">
					<div class="l-n-box col-sm-4">
						<div class="l-n-b-img">
							<img src="dist/images/page_template/news_dinoanddina.jpg" alt="">
						</div>
						<div class="l-n-b-content bp-rel">
							<h4>Meet Dino and Dina!</h4>
							<p>The Friendly Ostriches arrived at DV BOER FARM AGRICULTURAL RESORT</p>
							<a href="#" class="btn-solid bp-center bp-ab">Read more</a>
							<div class="clr"></div>
						</div>
					</div><!-- !l-n-box -->
					<div class="l-n-box col-sm-4">
						<div class="l-n-b-img">
							<img src="dist/images/page_template/news_2.jpg" alt="">
						</div>
						<div class="l-n-b-content bp-rel">
							<h4>Paghubog ng Makabagong Henerasyon</h4>
							<p>The Friendly Ostriches arrived at DV BOER FARM AGRICULTURAL RESORT</p>
							<a href="#" class="btn-solid bp-center bp-ab">Read more</a>
							<div class="clr"></div>
						</div>
					</div><!-- !l-n-box -->
					<div class="l-n-box col-sm-4">
						<div class="l-n-b-img">
							<img src="dist/images/page_template/news_3.jpg" alt="">
						</div>
						<div class="l-n-b-content bp-rel">
							<h4>The DV Emblem of Assurance</h4>
							<p>Let everyone remember my burning passion to provide affordable source of nourishment...</p>
							<a href="#" class="btn-solid bp-center bp-ab">Read more</a>
							<div class="clr"></div>
						</div>
					</div><!-- !l-n-box -->
				</div>
			</div>
		</div><!-- !latest news -->
		<div class="sub-farms">
			<div class="container">
				<h3 class="uppercase bp-center par-maxxx">Sub Farms</h3>
				<div class="owl-slider-container">
					<div class="owl-carousel owl-theme owl-loaded">
						<div class="o-c-item">
							<ul class="farm-items container bp-center">
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
							</ul>
						</div>
						<div class="o-c-item">
							<ul class="farm-items container bp-center">
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
								<li><img src="dist/images/farms/amherst-farms.png" alt=""></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!-- !sub farms -->
		<div id="contact" class="contact-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="white uppercase par-maxxx mb5">Contact us</h3>
					</div>
				</div>
				<div class="row">
					<div class="c-s-form col-sm-6">
						<form class="" action="index.html" method="post">
							<div class="form-group mb3 bp-rel">
								<input id="email" class="form-control bp-rel" type="text" class="form-control" name="" value="" required>
								<label class="bp-ab" for="email">Your Email</label>
							</div>
							<div class="form-group mb3 bp-rel">
								<input id="name" class="form-control bp-rel" type="text" class="form-control" name="" value="" required>
								<label class="bp-ab" for="name">Your Name</label>
							</div>
							<div class="form-group mb3 bp-rel">
								<textarea id="message" class="form-control bp-rel" name="name" rows="6" cols="80" required></textarea>
								<label class="bp-ab" for="message">Message/Inquiry</label>
							</div>
							<button type="submit" class="btn-outline wht bp-center uppercase mt6">Submit</button>
						</form>
					</div>
					<div class="c-s-list col-sm-5 ml-auto">
						<ul>
							<li>
								<div class="c-s-icon">
									<div class="c-s-i-center">
										<a href="https://www.facebook.com/dvboerfarm/" target="_blank" class="disabled"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</div>
								</div>
								<span class="c-s-details">Like and follow us on Facebook</span>
							</li>
							<li>
								<div class="c-s-icon">
									<div class="c-s-i-center"><a href="mailto:dv@dvboerfarm.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
								</div>
								<span class="c-s-details">dv@dvboerfarm.com</span>
							</li>
							<li>
								<div class="c-s-icon">
									<div class="c-s-i-center"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
								</div>
								<span class="c-s-details">2930 Nostalg Center, ADB Ortigas Center, Pasig City, Metro Manila</span>
							</li>
							<li>
								<div class="c-s-icon">
									<div class="c-s-i-center"><i class="fa fa-mobile" aria-hidden="true"></i></div>
								</div>
								<span class="c-s-details">0927 380 7473 | 0977 655 2155 | 0916 159 6021 </span>
							</li>
							<li>
								<div class="c-s-icon">
									<div class="c-s-i-center"><i class="fa fa-phone" aria-hidden="true"></i></div>
								</div>
								<span class="c-s-details">(02) 475 5011</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!-- !contact section -->

<?php get_footer();?>