<?php

class Connection{

public static function make($config){
    
    try {
        //return new PDO("mysql:host=localhost;dbname=myapp", 'root', '');
        return new PDO(
            $config['connection']. ';dbname=' .$config['name'],
            $config['username'],
            $config['password'],
            $config['options']
        );
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
   
}
