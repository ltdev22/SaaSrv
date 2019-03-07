<?php 

/**
 * Return the active class on current page or an emtpy string.
 *
 * @param string    $path   The url path of the current page
 * @return string
 */
if (!function_exists('isActive')) {
    function isActive(string $path): string
    {
        return request()->is($path) ? ' active' : '' ;
    }
}