<?php

use App\UnsplashService\UnsplashService;

$title = get_field('title');
$description = get_field('description');
$option_group = get_field('option_group');
$keyword = $option_group['keyword_for_image_search'];
$number_of_images = $option_group['number_of_images'];
$orientation = $option_group['orientation'];

$application_id = get_field('application_id', 'option');
$secret_key = get_field('secret_key', 'option');
$callback_url = get_field('callback_url', 'option');

$images = '';
$error = '';

if (!empty($application_id) && !empty($secret_key) && !empty($callback_url)) {
    try {
        $unsplashService = new UnsplashService($application_id, $secret_key, $callback_url);
        $images = $unsplashService->searchPhotos($keyword, $number_of_images, $orientation);
    } catch (Exception $e) {
        $error = 'Error: ' . $e->getMessage();
    }
} else {
    $error = 'Error: Application ID, secret key, and callback URL are required.';
}

$context = [
    'title' => $title,
    'description' => $description,
    'images' => $images,
    'error' => $error,
];

global $twig;
echo $twig->render('parts/image-slider.twig', $context);
