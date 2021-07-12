<?php


namespace App\Controllers;

use App\Core\App;

class AuthController {


    public function register() {

        $msg = "";

        return viewAuth('register', ['msg' => $msg]);
    }
    public function registerstore() {


        $password = md5(trim($_POST['password']));
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $type = trim($_POST['type']);

        if (empty($username) || empty($email) || empty($password) || empty($type)) {
            $msg = "Please fill in all the fields";
            return viewAuth('register', ['msg' => $msg]);
        }

        if (App::get('database')->register($email) === 0) {

            App::get('database')->insert('users', [
                'username' => $username,
                'email' =>  $email,
                'password' => $password,
                'type' => $type
            ]);

            $loggedUser = array('type' => $type, 'username' => $username, 'email' => $email);

            session_start();

            $_SESSION['login'] = true;
            $_SESSION['id'] = (int)$loggedUser['id'];
            $_SESSION['name'] = $loggedUser['username'];
            $_SESSION['email'] = $loggedUser['email'];
            $_SESSION['type'] = (int)$loggedUser['type'];

            header('location: products');

            exit();
        } else {

            $msg = "Entered email already exists!";

            return viewAuth('register', ['msg' => $msg]);
            exit();
        }
    }
    public function login() {
         $msg = "";
        return viewAuth('login', ['msg' => $msg]);
       
    }
    public function loginstore() {

        if (App::get('database')->session()) {
            return view('products');
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

            header('location: products');
            exit();
        } else {
            $msg = "Wrong Login Credentials for {$username}";
            return viewAuth('login', ['msg' => $msg]);
        }
    }

    public function signout() {

        session_start();
        session_unset();
        session_destroy();

        header('location: home');
        exit();
    }

    public function logout() {
        $_SESSION['login'] = false;
        session_destroy();
    }
}
