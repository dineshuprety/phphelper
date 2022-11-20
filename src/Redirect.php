<?php

namespace Nepo\Helper;

class Redirect
{
    /**
     * Redirect to specific Page
     *
     * @param $page
     */
    public static function to($page)
    {
        header("location: $page");
    }

    /**
     * Redirect to same page
     */
    public static function back()
    {
        $url = $_SERVER['REQUEST_URL'];
        header("location: $url");
    }
}
