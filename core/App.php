<?php

namespace App\Core;

class App
{
    protected static $memory = [];

    public static function bind($key, $val)
    {
        // Add to the $mem stash
        static::$memory[$key] = $val;
    }

    public static function get($data)
    {
        //  Return from $mem stash
        if (! array_key_exists($data, static::$memory)) {
            throw new Exception("No {$data} is bound in the container");
        }
        return static::$memory[$data];
    }
}
