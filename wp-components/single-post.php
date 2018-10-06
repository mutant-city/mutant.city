<section class="section">
    <div class="columns">
        <div class="column is-2">
            <p class="image"">
            <?php if (has_post_thumbnail()):echo get_the_post_thumbnail();endif; ?>
            </p>
        </div>

        <div class="column is-10">
            <div class="media-content">
                <h1 class="blog-post-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <p class=><?php the_date(); ?> by <?php the_author(); ?></p>
            </div>
        </div>

    </div>
</section>
<section class="section" style="margin-top:-4%; border-bottom: 3px solid whitesmoke">
    <?php the_content(); ?>
</section>

