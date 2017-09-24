<?php
/*
Template name: About page template
*/
$about = get_page_by_title( 'About Us' );
$mission = get_field('mission', $about->ID);
$vision = get_field('vision', $about->ID);
$objectiveCol1 = get_field('objectives_column_1', $about->ID);
$objectiveCol2 = get_field('objectives_column_2', $about->ID);

get_header();
?>
<div class="top-banner about-section">
			<div class="container">
					<h3 class="bebasNeue par-smax uppercase bp-center"><?php echo $about->post_title?></h3>
					<?php echo $about->post_content; ?>
			</div>
		</div><!-- !top banner -->
		<div class="vision-mission">
			<div class="gray-section container">
				<div class="v-m-content col-sm-7 ml-auto">
					<h3 class="uppercase par-maxxx">Our Vision</h3>
					<p class="par-xlarge mt2 mb5"><?php echo $vision; ?></p>
					<h3 class="uppercase par-maxxx">Our Mission</h3>
					<p class="par-xlarge mt2"><?php echo $mission; ?></p>
				</div>
			</div>
		</div><!-- !vision mission-->
		<div class="guiding-principles">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<?php echo $objectiveCol1; ?>
					</div>
					<div class="col-sm-4 ml-auto">
						<?php echo $objectiveCol1; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="core-values">
			<h3 class="uppercase bp-center par-maxxx mb5">Core Values</h3>
			<div class="container">
				<div class="row bp-rel">
					<div class="c-v-box col-sm-6 bp-center">
						<p>Creativity</p>
					</div>
					<div class="c-v-box col-sm-6 bp-center">
						<p>Visionary</p>
					</div>
					<div class="c-v-box col-sm-6 bp-center">
						<p>Passion</p>
					</div>
					<div class="c-v-box col-sm-6 bp-center">
						<p>Diligence</p>
					</div>
					<div class="c-v-center bp-center bp-ab bp-centralize">
						<p>Commitment</p>
					</div>
				</div>
			</div>
		</div><!-- !core values -->
		<div class="map mt2 mb5">
			<div class="container bp-img wide">
				<img src="<?php echo the_post_thumbnail();?>" alt="">
			</div>
		</div><!-- !map -->

<?php get_footer();?>