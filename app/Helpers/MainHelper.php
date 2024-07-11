<?php

if (! function_exists('translate')) {
    function translate($phrase)
    {
        return $phrase;
    }
}

if (! function_exists('img')) {
    function img($path = null)
    {
        if (empty($path) || ! is_string($path)) {
            return asset('assets/images/placeholder/default.png');
        }
        if ($path == 'user') {
            return asset('assets/images/placeholder/avatar.png');
        }
        if (file_exists(public_path($path))) {
            return asset($path);
        }
        return asset('assets/images/placeholder/default.png');
    }
}
