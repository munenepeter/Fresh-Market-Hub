<?php

class AuthController
{


    public function register()
    {
        $msg = '';
        return viewAuth('register', ['msg' => $msg]);
    }
    public function registerstore()
    {
      
        $password = md5($_POST['password']);
        $username = $_POST['username'];
        $email = $_POST['email'];
        $type = $_POST['type'];

        if (App::get('database')->register($email) == 0) {

            App::get('database')->insert('users', [
                'username' => $username,
                'email' =>  $email,
                'password' => $password,
                'type' => $type
            ]);

            $msg = "Successfull registered {$username}";

            return viewAuth('login', ['msg' => $msg]);
            exit();

        } else {

            $msg = "Entered email already exists!";

            return viewAuth('register', ['msg' => $msg]);
            exit();
        }
    }
    public function login()
    {
        $msg = '';
        return viewAuth('login', ['msg' => $msg]);
        exit();
    }
    public function loginstore()
    {

        if (App::get('database')->session()) {
            return view('home');
        }

        $password = md5($_POST['password']);
        $username = htmlspecialchars($_POST['username']);

        if (App::get('database')->login($username, $password)[0] == 1) {

            require 'core/Users.php';
            
            $loggedUser = App::get('database')->login($username, $password)[1];
            
            session_start();

            $_SESSION['login'] = true;
            $_SESSION['id'] = (int)$loggedUser['id'];
            $_SESSION['name'] = $loggedUser['username'];
            $_SESSION['email'] = $loggedUser['email'];
            $_SESSION['type'] = (int)$loggedUser['type'];
            
            header('location: home');
            exit();
        } else {
            $msg = "No account found for {$username}";
            return viewAuth('login', ['msg' => $msg]);
        }
    }
  
    public function signout(){

        session_start();
        session_unset();
        session_destroy();

        header('location: home');
        exit();
    }
}
