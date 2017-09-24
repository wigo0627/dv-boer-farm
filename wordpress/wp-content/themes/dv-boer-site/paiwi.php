<?php
/*
Template name: Paiwi page template
*/

global $wpdb;
$table_name = $wpdb->prefix . "paiwi_package";
$row = $wpdb->get_results("SELECT * from $table_name");
$i = 1;

get_header();
?>
<div class="top-banner paiwi-section">
			<div class="container">
					<h3 class="bebasNeue par-smax uppercase bp-center">What is Pa-Iwi?</h3>
			</div>
		</div><!-- !top banner -->
		<div class="paiwi">
			<h3 class="uppercase bp-center par-maxxx mt5 mb5">Pa-Iwi Packages</h3>
			<div class="row no-margin">
				<?php foreach($row as $key => $value):?>
					<div class="p-box p-box-<?php echo $i; ?> no-padding col-sm-12">
						<div class="p-box-inner-green col-sm-7 <?php echo $i%2 == 0 ? 'mr' : 'ml';?>-auto">
							<div class="p-b-i-content col-sm-8 <?php echo $i%2 == 0 ? 'ml' : 'mr';?>-auto">
								<h3><?php echo $value->title; ?></h3>
								<div class="pad-left bp-rel">
									<h4>Projected return: <?php echo $value->project_return; ?></h4>
									<ul class="">
										<?php if(!empty($value->duration)): ?>
											<li>Pa-iwi duration: <?php echo $value->duration; ?></li>
										<?php endif; ?>
										<?php if(!empty($value->heads)): ?>
											<li>Number of heads: <?php echo $value->heads; ?></li>
										<?php endif; ?>
										<?php if(!empty($value->insurance)): ?>
											<li>Insurance: <?php echo $value->insurance; ?></li>
										<?php endif; ?>
										<?php if(!empty($value->kid)): ?>
											<li>Price per kid: <?php echo $value->kid; ?> </li>
										<?php endif; ?>
										<?php if(!empty($value->cost)): ?>
											<li>Package cost: <?php echo $value->cost; ?></li>
										<?php endif; ?>
									</ul>
								</div>
								<a href="#" class="btn-outline wht bp-center uppercase mt6">Avail this package now</a>
							</div>
						</div>
					</div><!--p-box -->
				<?php $i++; endforeach; ?>
			</div>
		</div><!--!paiwi -->

<?php get_footer();?>