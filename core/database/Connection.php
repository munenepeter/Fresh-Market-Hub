<?php

class Connection
{

    public static function make($config){
        
        try {
           /*  //fall back code ie the config is absent
            return new PDO("mysql:host=localhost;dbname=myapp", 'root', ''); */
               
            //Here you return the credentials stored in the config file
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

            //Just Experimenting with my custom exceptions page
            /* ****************** */

           /* try {
                //return new PDO("mysql:host=localhost;dbname=myapp", 'root', '');

                if(! new PDO(
                    $config['connection']. ';dbname=' .$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                )){
                    throw new \PDOException('There is connection to your Database!');
                }
            } catch (\PDOException $e) {
                $message = $e->getMessage();
                $code = $e->getCode();
                $file = $e->getFile();
                $line = $e->getLine();
                $trace = $e->getTraceAsString();
                return viewErrors('exceptions', [
                'message' => $message,
                'code'   => $code,
                'file'   => $file,
                'line'   => $line,
                'trace'   => $trace
                ]);
            }finally{
            die();
            }  */
}
