<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part('wp-components/bulma-static-nav-bar'); ?>

<section class="section" id="main-loop">
    <div class="container">
    <?php get_template_part('wp-components/main-loop'); ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php get_template_part('wp-components/main-loop-nav-links.php'); ?>
    </div>
</section>


<?php get_footer(); ?>


</body>
</html>