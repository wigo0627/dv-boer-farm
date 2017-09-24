<?php
/*
Template name: Our Farm page template
*/
$ourFarm = get_page_by_title( 'Our Farm' );
$youtube = get_field('youtube_video', $ourFarm->ID);
$image = get_field('founder_image', $ourFarm->ID)['url'];
$name = get_field('founder_name', $ourFarm->ID);
$position = get_field('position', $ourFarm->ID);

 get_header();?>
<div class="top-banner ourfarm-section">
			<div class="container">
					<h3 class="bebasNeue par-smax uppercase bp-center mb3">Take A Virtual Tour</h3>
					<div class="video-container sixteen-nine col-sm-8">
						<div id="player" class="content" data-src="https://www.youtube.com/watch?v=hPiahQesgIk"></div>
					</div>
			</div>
		</div><!-- !top banner -->
		<div class="about-us about-founder">
			<div class="gray-section container">
				<div class="col-sm-10 auto">
					<h3 class="dkGreen uppercase par-maxxx mb4">About the Founder</h3>
					<div class="a-f-picture bp-center col-sm-3 fl">
						<img src="<?php echo $image?>" alt="">
						<h6><?php echo $name; ?></h6>
						<p><?php echo $position; ?></p>
					</div>
					<?php echo $ourFarm->post_content; ?>
				</div>
			</div>
		</div><!-- !about us about founder-->
		<div class="farm-gallery">
			gallery
		</div>

<?php get_footer();?>