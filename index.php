<?php
/**
 * Base page template
 *
 * @package WordPress
 * @subpackage TejoMaya
 * @since 1.0.0
 *
 * @link    https://developer.wordpress.org/themes/template-files-section/page-template-files/
 */

get_header();

global $twig;
global $post;
$context = array();
$context['title'] = get_the_title($post);
$context['post'] = apply_filters('the_content', $post->post_content);

echo $twig->render('page.twig', $context);

get_footer()
?>
