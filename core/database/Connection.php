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
            return new \PDO(
                $config['connection']. ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (\PDOException $e) { 
            $_SESSION['error'] = true;
            $code = $e->getCode();
            return viewErrors('ClientExceptions', [
                'code' => $code
            ]);
            
        }
    }
}
