<?php get_header(); ?>

<main class="container my-5">
    <?php
    if (have_posts()): 
        while (have_posts()) : the_post();
            if (in_category('item')) :
                if(has_post_thumbnail()) : ?>
                    <div class="mb-4">
                        <?php the_post_thumbnail('full', array('class' => 'w-100 h-auto')); ?>
                    </div>
                <?php
                endif; ?>
                <h1 class="display-5 fw-bold text-body-emphasis"><?php the_title(); ?></h1>
                <p class="lead"><?php echo get_the_excerpt(); ?></p>
            <?php
            endif;
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>