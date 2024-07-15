<?php

namespace App\UnsplashService;

use Unsplash\HttpClient;
use Unsplash\Search;

class UnsplashService
{
    const CACHE_EXPIRATION = HOUR_IN_SECONDS;
    const DEFAULT_PER_PAGE = 5;
    const DEFAULT_ORIENTATION = 'landscape';
    const CACHE_KEY_PREFIX = 'unsplash_search_key';

    public  function __construct($applicationId, $secret, $callbackUrl)
    {
        HttpClient::init([
            'applicationId' => $applicationId,
            'secret' => $secret,
            'callbackUrl' => $callbackUrl,
        ]);
    }

    public function searchPhotos($query, $perPage = self::DEFAULT_PER_PAGE, $orientation = self::DEFAULT_ORIENTATION)
    {
        if (empty($perPage)) {
            $perPage = self::DEFAULT_PER_PAGE;
        }

        if (empty($orientation)) {
            $orientation = self::DEFAULT_ORIENTATION;
        }

        $cacheKey = self::CACHE_KEY_PREFIX . md5($query . $perPage . $orientation);
        $photos = get_transient($cacheKey);

        if ($photos === false) {
            $photos = Search::photos($query, 1, $perPage, $orientation)->getResults();
            set_transient($cacheKey, $photos, self::CACHE_EXPIRATION);
        }

        return $photos;
    }
}