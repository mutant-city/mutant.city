<section class="section" id="comment-<?php comment_ID() ?>">
    <div class="comment-header">
        <?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?>
        by
        <?php printf(__('%s'), get_comment_author()) ?>
        <a class="comment-permalink"
           href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>">
            <i class="fa fa-anchor"></i>
        </a>
    </div>
    <?php if ($comment->comment_approved == '0'): ?>
        <div>
            <?php _e('Thank you for posting. Your comment is awaiting moderation.'); ?>
            <?php _e('Thank you for posting. Your comment is awaiting moderation.'); ?>
        </div>
    <?php else: ?>
        <div>
            <?php comment_text(); ?>
        </div>
    <?php endif; ?>
</section>

