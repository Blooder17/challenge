<?php
/**
 * Gallery Block Template
 * 
 * @param array $block The block settings and attributes
 */
?>

<!-- Slider main container -->
<div class="swiper">
    <!-- Slider wrapper -->
    <div class="swiper-wrapper">
        <!-- Individual slides -->
        <?php 
            // Check if the repeater field has any images and put them in the slider if there are
            if (have_rows('gallery_field')) :
                while (have_rows('gallery_field')) : the_row();
                    $image = get_sub_field('gallery_image');
                    ?>
                    <div class="swiper-slide"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
                <?php
                endwhile;
            endif; 
            ?>
    </div>

    <!-- Slider pagination -->
    <div class="swiper-pagination"></div>
    
    <!-- Navigation buttons -->
    <div class="swiper-button swiper-button-prev"></div>
    <div class="swiper-button swiper-button-next"></div>
</div>