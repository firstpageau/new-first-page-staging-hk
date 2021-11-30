<?php

	$background = get_sub_field('background');
    $animation = get_sub_field('animation');
    $animation = $animation ? " wow {$animation} " : '';
	$margin = get_sub_field('margin');
	$padding = get_sub_field('padding');
	$customClass = get_sub_field('custom_class');
	$layout = get_sub_field('layout');

	$background_url = '';
	if ( $background['image'] )
		$background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--testimonials <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block-image-right-section">
			<section class="section-paragraph section-paragraph-home-2">
				<div class="row no-gutters align-items-center flex-column-reverse flex-md-row flex-md-row-reverse">
					<div class="col-12 col-md-6 image-container-right">
						<?php 
							$image_right = get_sub_field('right_long_image');
							if( !empty( $image_right ) ): ?>
							<?php // var_dump($image_right); ?>
							<img src="<?php echo $image_right['url']; ?>"  srcset="<?php echo $image_right['url']; ?>, <?php echo $image_right['url']; ?>" class="img-fluid d-xxl-inline-block" alt="<?php echo $image_right['alt']; ?>" />
							<?php endif; ?>
					</div>
					<div class="col-12 col-md-6 text-container">
						<?php the_sub_field('long_image_content'); ?>
						<button type="button" data-title="homepage-get-freeproposal-the" class="btn fp-btn fp-btn-orange show-popup-form buttonFormClick">Get a free proposal</button>
					</div>
				</div>
			</section>
		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
