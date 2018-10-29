<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part('wp-components/bulma-static-nav-bar'); ?>

<section class="section" id="main-loop">
    <?php get_template_part('wp-components/main-loop'); ?>
</section>

<section class="section">
    <?php get_template_part('wp-components/main-loop-nav-links.php'); ?>
</section>

<?php get_footer(); ?>
</body>
</html>