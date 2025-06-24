<?php 
/**
 * Template Name: Search Page
 */
get_header();
?>

<main class="container my-5">
    <section class="my-5">
        <h1 class="display-5 fw-bold text-body-emphasis text-center my-5">Search</h1>
    <?php 
    get_search_form();
    
    $s = get_search_query();
    $args = [
        's' => $s,
        'post_type' => 'post',
        'category_name' => 'item'
    ];

    $query = new WP_Query($args);
    
    if ($query->have_posts()) : ?>
            <ul class="list-group list-group-flush">
            <?php
            while ($query->have_posts()) : $query->the_post(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="my-4">
                        <div class="mb-4">
                            <?php the_post_thumbnail('full', array('class' => 'w-100 h-auto')); ?>
                        </div>
                        <div>
                            <h4 class=""><?php the_title(); ?></h4>
                            <p><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </div>
                </li>
            <?php 
            endwhile;
            ?>
            </ul>
        </section>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</main>

<?php get_footer(); ?>