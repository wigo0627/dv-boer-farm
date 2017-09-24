<?php
/*
Template name: Home page template
*/
$about = get_page_by_title( 'About Us' );
$aboutUrl = site_url().'/'.$about->post_name;

$news = get_posts(); 

$i = 0;

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
					<?php foreach($news as $key => $value): ?>
						<?php if($i < 3): $i++;?>
						<div class="l-n-box col-sm-4">
							<div class="l-n-b-img">
								<?php echo get_the_post_thumbnail($value->ID, 'full', array('class' => 'img-responsive')) ?>
							</div>
							<div class="l-n-b-content bp-rel">
								<h4><?php echo $value->post_title; ?></h4>
								<p><?php echo $value->post_excerpt; ?></p>
								<a href="#" class="btn-solid bp-center bp-ab">Read more</a>
								<div class="clr"></div>
							</div>
						</div><!-- !l-n-box -->
						<?php else: break;?>
						<?php endif;?>
					<?php endforeach;?>
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
<?php get_footer();?>