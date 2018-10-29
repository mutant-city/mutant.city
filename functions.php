<?php

function load_styles()
{
    wp_enqueue_style('maincss', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts()
{
    wp_enqueue_script('nav-bar-burger', get_template_directory_uri() . '/assets/scripts/nav-bar-burger.js', ['jquery']);
}
add_action('wp_enqueue_scripts', 'load_scripts');

/**
 * Theme support
 */
# lets wordpress manage the title tag via an insert into head
function title_wp_setup()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'title_wp_setup');

# allow featured images
function mytheme_post_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mytheme_post_thumbnails');

/**
 * When you click on Read More, the default behavior is to jump.
 * https://wpstudio.com/eliminating-jump-wordpress-read-link/
 */
function eliminate_readmore_jump($link)
{
    $offset = strpos($link, '#more-');
    if ($offset) {
        $end = strpos($link, '"', $offset);
    }
    if ($end) {
        $link = substr_replace($link, '', $offset, $end - $offset);
    }
    return $link;
}

add_filter('the_content_more_link', 'eliminate_readmore_jump');


# set your single comment template
function format_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    include(get_template_directory() . '/wp-components/single-comment.php');
}
/**
 * Useful sites for working with this functions.php file
 * https://www.wpbeginner.com/wp-tutorials/25-extremely-useful-tricks-for-the-wordpress-functions-file/
 * https://premium.wpmudev.org/blog/functions-file/
 */