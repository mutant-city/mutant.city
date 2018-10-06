<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part('wp-components/bulma-static-nav-bar'); ?>

<section class="section">
    <ul>
        <?php wp_list_categories(['show_count'=>1]); ?>
    </ul>
</section>

</body>
</html>
