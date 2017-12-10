<?php

class Connection
{
    public static function Connect($config)
    {
        try{
            return new PDO();
        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}