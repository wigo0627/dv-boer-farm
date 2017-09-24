<?php
/*
Template name: News Page template
*/

$news = get_posts(); 
get_header();
?>
<div class="top-banner news-section">
			<div class="container">
				<h3 class="bebasNeue par-smax uppercase bp-center">News</h3>
			</div>
		</div><!-- !top banner -->
		<div class="news-post-container">
			<div class="container">
				<div class="row">
					<?php foreach ($news as $key => $value): ?>
						<div class="n-p-box col-sm-6">
							<div class="n-p-b-container">
								<div class="n-p-b-img bp-img wide">
									<?php echo get_the_post_thumbnail($value->ID, 'full', array('class' => 'img-responsive')) ?>
								</div>
								<div class="n-p-b-content bp-rel">
									<h4><?php echo $value->post_title; ?></h4>
									<p><?php echo $value->post_excerpt; ?></p>
									<a href="<?php echo the_permalink($value->ID); ?>" class="btn-solid bp-center bp-ab">Read more</a>
									<div class="clr"></div>
								</div>
							</div>
						</div><!-- !n-p-box -->
					<?php endforeach; ?>
				</div>
			</div>
		</div><!-- !news posts -->
<?php get_footer();?>