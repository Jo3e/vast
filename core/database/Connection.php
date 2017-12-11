<?php

class Connection
{
    public static function Connect($config)
    {
        try{
            return new PDO(
                $config['dbtype'].":host=". $config['host'].";dbname=".$config['name'],
                $config['user'],
                $config['pass'],
                $config['options']
            );
        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
}