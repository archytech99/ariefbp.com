<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

define('RANDTOKEN', Str::random(8));
define('PROJECTDIR', __DIR__.DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR);
define('MEDIADIR', PROJECTDIR .'public'. DIRECTORY_SEPARATOR .'media'. DIRECTORY_SEPARATOR);
define('ASSETDIR', PROJECTDIR .'public'. DIRECTORY_SEPARATOR .'asset'. DIRECTORY_SEPARATOR);
define('VENDORDIR', PROJECTDIR .'public'. DIRECTORY_SEPARATOR .'vendor'. DIRECTORY_SEPARATOR);

if (!function_exists('api_token')) {
    /**
     * Create hash with 'sha3-256' algorithm.
     *
     * @param mixed $key
     * @return string
     */
    function api_token($key = RANDTOKEN): string
    {
        return hash('sha3-256', $key);
    }
}

if (!function_exists('asset_public')) {
    /**
     * Redefine asset to public.
     *
     * @param mixed $value
     * @return string
     */
    function asset_public($value): string
    {
        return asset('public'. DIRECTORY_SEPARATOR . $value);
    }
}
