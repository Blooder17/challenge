<?php 
/**
 * Template Name: Events Page
 */
get_header();
?>

<main class="container my-5">
    <?php 


    // Set values for WP_Query to only look for posts that have the gallery
    $args = [
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value',
        'order' => 'ASC',
        'posts_per_page' => 2,
        'paged' => get_query_var( 'paged' ) 
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) : ?>
        <section class="my-5">
            <h1 class="display-5 fw-bold text-body-emphasis text-center my-5">Events</h1>
            <ul class="list-group list-group-flush">
            <?php
            while ($query->have_posts()) : $query->the_post(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="event-info d-flex flex-wrap flex-column">
                        <span><?php the_title(); ?> - <?php echo get_field('event_date'); ?></span>
                        <span><?php echo get_field('event_location'); ?></span>
                    </div>
                    <a href="#" class="btn btn-secondary h-100">Buy Ticket</a>
                </li>
            <?php 
            endwhile;
            ?>
            </ul>
            <div class="pagination mt-4 d-flex justify-content-center column-gap-1">
                <?php
                echo paginate_links([
                    'total' => $query->max_num_pages,
	                'current' => max(1, get_query_var('paged')),
                    'prev_text' => '< Previous',
                    'next_text' => 'Next >'
                ]);
                ?>
            </div>
        </section>
    <?php
    endif;
    wp_reset_postdata();
    ?>
</main>

<?php get_footer(); ?>