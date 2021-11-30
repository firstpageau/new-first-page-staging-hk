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

		<div class="block-image-left-section">
			<section class="section-paragraph section-paragraph-home">
					<div class="row no-gutters align-items-center flex-column-reverse flex-md-row">
						<div class="col-12 col-md-6 image-container-left">
							<?php 
							$image = get_sub_field('left_long_image');
							if( !empty( $image ) ): ?>
							<img src="<?php echo $image['url']; ?>"  srcset="<?php echo $image['url']; ?>, <?php echo $image['url']; ?>" class="img-fluid d-xxl-inline-block" alt="<?php echo $image['alt']; ?>" />
							<?php endif; ?>
						</div>
						<div class="col-12 col-md-6 text-container">
							<?php the_sub_field('long_image_content'); ?>
							<button type="button" data-title="homepage-get-freeproposal-when" class="btn fp-btn fp-btn-orange show-popup-form buttonFormClick">Get a free proposal</button>
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
