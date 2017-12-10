<?php

class App
{
    protected static $memory = [];

    public static function bind($val)
    {
        // Add to the $mem stash
        self::$memory[] = $val;
    }

    public static function get($data)
    {
        //  Return from $mem stash
        return self::$memory[$data];
    }
}
