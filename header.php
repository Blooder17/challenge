<?php
/**
 * The template for displaying the header
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Automatic title changes depending on the page -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="d-flex flex-wrap justify-content-center px-3 py-3 mb-4 border-bottom">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-2">
                <?php bloginfo('name'); ?>
            </span>
        </a>
        <!-- Navigation menu with some classes -->
        <?php wp_nav_menu(array('menu_class' => 'nav nav-pills')) ?>
    </header>