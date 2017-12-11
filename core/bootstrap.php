<?php

use App\Core\App;

App::bind('config', require "config.php");

App::bind('database', new QueryBuilder(
    Connection::Connect(App::get('config')['database'])
));
// Lets shorten our views process
function view($name, $data = [])
{
    // give access to the view data
    extract($data);
    return require "app/views/{$name}.php";
}
// helper functions
function dd($value)
{
    die(var_dump($value));
}
// mask header function
function redirect($direction)
{
    header("location: /{$direction}");
}