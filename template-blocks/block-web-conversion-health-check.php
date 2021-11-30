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

<div class="<?php echo $animation; ?> block block--text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">

<?php if($layout == 'full-width'): ?>
    <div class="container">
<?php endif; ?>

    <div class="block__web_conversion">
        <section class="section-letstalk section-orange section-letstalk-new">
            <div class="container-fluid">
                <p class="mb-3 p-tag-h2-style"><strong>Get your free Website & Converstion Health Check </br> with an experienced digital strategist valued at </br>$2,000HKD.</strong></p>
                <p class="font-italic mb-4" style="font-size: 18px; font-weight:normal;">Hurry! Limited spots available.</p>
                <a href="/free-growth-strategy" class="btn fp-btn fp-btn-white fp-btn-shadow fp-session free-session-btn">Get my free health check</a>
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
