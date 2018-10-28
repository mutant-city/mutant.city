
        <div>
            <?php get_comments_number(); ?>
        </div>
        <div>
            <?php get_the_title(); ?>
        </div>
        <div>
            <?php get_comment_pages_count(); ?>
        </div>

        <ol class="comment-list">
            <?php wp_list_comments(); ?>
        </ol><!-- .comment-list -->

    <br/>
    <?php comment_form(); ?>
