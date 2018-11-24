<?php
/**
 * Note: comments.php is required for some reason by Wordpress by later versions
 * Comment Architecture:
 * wp-comments/comments.php -> ./comments.php  -> functions.php -> single-comment.php
 */

?>
<?php if (have_comments()) : ?>

    <section class="section">
        <div class="container">
            <div id="comments-thoughts-blurb">
                <?php
                printf(_nx('One thought on: "%2$s"', '%1$s thoughts on: "%2$s"', get_comments_number(), 'comments title', 'twentythirteen'),
                    number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
                ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
    <ol>
        <?php wp_list_comments('type=comment&callback=format_comment'); ?>
    </ol>

    <?php if (!comments_open() && get_comments_number()) : ?>
        <p><?php _e('Comments are closed.', 'twentythirteen'); ?></p>
    <?php endif; ?>
    <br/>
<?php endif; // have_comments() ?>
        </div>
    </section>

<section class="section">
<div class="container">
    <?php comment_form(); ?>
</div>
</section>