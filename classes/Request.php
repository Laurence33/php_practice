<?php


class Request
{

    public static function uri()
    {
        // return the path only without slashes on both ends
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }
}
