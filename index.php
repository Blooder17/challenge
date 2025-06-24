<?php 
/**
 * Template Name: Index
 */
get_header();
?>
<main class="container">
    <section class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis">FromSoftware</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                FromSoftware is a Japanese game development studio responsible for creating some of the most unique and internationally successful video games today.
            </p>
        </div>
    </section>

    <?php
    // Set values for WP_Query to only look for posts that have the gallery
    $args = [
        'name' => 'gallery'
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <section class="my-5">
            <?php
            while ($query->have_posts()) : $query->the_post();
                the_content(); // Renders the gallery block
            endwhile;
            ?>
        </section>
    <?php
    endif;
    wp_reset_postdata();
    

    // Set values for WP_Query to only look for posts that have the items group
    $args = [
        'name' => 'items-group'
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <section class="my-5">
            <?php
            while ($query->have_posts()) : $query->the_post();
                the_content(); // Renders the items block
            endwhile;
            ?>
        </section>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</main>

<?php get_footer(); ?>