<?php
/**
 * Gallery Block Template
 * 
 * @param array $block The block settings and attributes
 */

// Load fields and values
$title = get_field('title');
$description = get_field('description');
$numberOfPosts = get_field('number_of_posts');

// Set values for WP_Query to only look for posts with category item
$args = [
    'post_type' => 'post',
    'category_name' => 'item',
    'posts_per_page' => $numberOfPosts,
];

$query = new WP_Query($args);
?>

<div class="row mb-3 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis"><?php echo $title; ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo $description; ?></p>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4 card-row items-group">
    <?php
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

            <div class="col">
                <div class="card h-100">
                <?php 
                if (has_post_thumbnail()) :
                    the_post_thumbnail('large', array('class' => 'card-img-top'));
                endif;
                ?>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <?php the_title(); ?>
                        </h5>
                        <p class="card-text text-truncate-multiline">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <a href="<?php echo get_permalink() ?>" class="stretched-link" aria_label="<?php the_title() ?> details"></a>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata(); 
    endif;
    ?>
</div>

