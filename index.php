<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php get_header(); ?>

<body <?php body_class(); ?>>

<?php get_template_part('wp-components/bulma-static-nav-bar'); ?>

<section class="section">
            <?php
            if (have_posts()) {
                while (have_posts()) : the_post(); ?>
                    <?php get_template_part('wp-components/single-post'); ?>
                <?php endwhile;
            } ?>
        </div>
    </div>
</section>
    <section class="section">
            <nav>
                <ul>
                    <li><?php next_posts_link('Previous'); ?></li>
                    <li><?php previous_posts_link('Next'); ?></li>
                </ul>
            </nav>
    </section>

 <?php get_footer(); ?>

</body>
</html>