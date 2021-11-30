<section class="banner form-space home-banner">
<?php if ( have_rows( 'banner_slider' ) ) : ?>
	<?php while ( have_rows( 'banner_slider' ) ) : the_row(); ?>
	<?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row();
			$desktop = get_sub_field('banner_right_desktop_image');
			$tablet = get_sub_field('banner_right_tablet_image');
			$mobile = get_sub_field('banner_right_mobile_image');
			?>
	<div class="container banner-hero">
		<div class="banner-hero-cont">
			<h1 class="form-hide"><?php the_sub_field('primary_heading'); ?></h1>
			<div class="banner-description">
				<p class="form-hide"><?php the_sub_field('secondary_text'); ?></p>
				<div class="form-hide hero-mobile">
					<img src="<?php echo $mobile['url']; ?>"  srcset="<?php echo $mobile['url']; ?>, <?php echo $mobile['url']; ?>" alt="<?php echo $mobile['alt']; ?>" />
				</div>
			</div>
			<?php get_template_part( 'forms/form-services' ); ?>
		</div>
		<div class="text-center text-md-left awards-badges relative">
    		<img src="/wp-content/themes/firstpage/img/img_banner_badges_lg.svg" class="img-fluid d-none d-sm-inline-block" alt="" />
    		<img src="/wp-content/themes/firstpage/img/img_banner_badges_sm.svg" class="img-fluid d-sm-none" alt="" />
		</div>
		<div class="hero-img d-none d-md-block d-lg-none">
			<img src="<?php echo $tablet['url']; ?>"  srcset="<?php echo $tablet['url']; ?>, <?php echo $tablet['url']; ?>" alt="<?php echo $tablet['alt']; ?>" />
		</div>
		<div class="hero-img d-none d-lg-block">
			<img src="<?php echo $desktop['url']; ?>"  srcset="<?php echo $desktop['url']; ?>, <?php echo $desktop['url']; ?>" alt="<?php echo $desktop['alt']; ?>" />
		</div>
		<div class="name-tag">
			<h3><b><?php the_sub_field('name_tag'); ?></b> - First Pager</h3>
		</div>
	</div>
	<?php endwhile; endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
</section>
