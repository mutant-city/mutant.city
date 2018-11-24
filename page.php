<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body <?php body_class(); ?>>
<?php get_template_part('wp-components/bulma-static-nav-bar'); ?>
<section class="section">
    <div class="container">
    <div class="columns">
        <div class="column is-2">
            <p class="image"">
            <?php if (has_post_thumbnail()):echo get_the_post_thumbnail();endif; ?>
            </p>
        </div>
        <div class="column">
        <?= get_post_field('post_content', $post->ID) ?>
        </div>
    </div>
    </div>
</section>
</body>
</html>
