<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body <?php body_class(); ?>>

<?php get_template_part('wp-components/bulma-static-nav-bar'); ?>

<section class="section">
    <?php get_template_part('wp-components/main-loop'); ?>
</section>
<hr/>
<section class="section">
    <?php get_template_part('wp-components/comments'); ?>
</section>


<?php get_footer(); ?>

</body>
</html>

