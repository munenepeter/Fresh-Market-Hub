<?php
namespace App\Core\Database; 

class Connection {
    /**
     * Make Database connection.
     *
     * @param config[] configuration data from config.php
     * 
     * @return \PDO New PDO instance
     */
    public static function make($config) {

        try {
            /**
             *fall back code ie the config is absent
            */ 

            // return new PDO("mysql:host=localhost;dbname=myapp", 'root', ''); 

            //Here you return the credentials stored in the config file
            return new \PDO(
                $config['connection']. ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
