<?php
/**
 * The template for displaying the footer
 */
?>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 px-5 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                &copy; 2025 <?php bloginfo('name'); ?>
            </a>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>