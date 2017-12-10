<?php

require "core/Router.php";
require "core/Request.php";
require "core/database/Connection.php";
require "core/database/QueyBuilder.php";

$query = new QueryBuilder(
    Connection::Connect(App::get())
);