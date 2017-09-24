<?php
/*
Template name: Post page template
*/
$post = get_post();

get_header();
?>
<div class="about-us about-founder">
			<div class="gray-section container">
				<div class="col-sm-10 auto">
					<h3 class="dkGreen uppercase par-maxxx mb4"><?php echo $post->post_title?></h3>
					<?php echo $post->post_content; ?>
				</div>
			</div>
		</div><!-- !about us about founder-->

<?php get_footer();?>