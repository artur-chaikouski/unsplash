<?php
$loader = new \Twig\Loader\FilesystemLoader(get_template_directory() . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => get_template_directory() . '/cache/twig',
    'debug' => false,
]);

if ( defined( 'WP_DEBUG' ) && WP_DEBUG ) {
    $twig->enableDebug();
}

$twig->addFunction(new \Twig\TwigFunction('bloginfo', function($show = '', $filter = 'raw') {
    return get_bloginfo($show, $filter);
}));

$twig->addFunction(new \Twig\TwigFunction('wp_title', function($sep = '»', $display = true, $seplocation = '') {
    return wp_title($sep, $display, $seplocation);
}));

$twig->addFunction(new \Twig\TwigFunction('wp_head', function() {
    ob_start();
    wp_head();
    return ob_get_clean();
}));

$twig->addFunction(new \Twig\TwigFunction('language_attributes', function($doctype = 'html') {
    return language_attributes($doctype);
}));

$twig->addFunction(new \Twig\TwigFunction('body_class', function($class = '') {
    return body_class($class);
}));

$GLOBALS['twig'] = $twig;
