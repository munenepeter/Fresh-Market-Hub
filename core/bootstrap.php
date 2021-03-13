<?php
require 'core/App.php';
App::bind('config', require 'config.php');


require 'core/Router.php';
require 'core/Request.php';
require 'core/Cart.php';
require 'core/CartItem.php';
require 'core/Product.php';
require 'controllers/ProductsController.php';
require 'controllers/AuthController.php';
require 'controllers/PagesController.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{

    extract($data);

    return require "views/{$name}.view.php";
}

function viewAuth($name, $data = [])
{
    extract($data);

    return require "views/auth/{$name}.view.php";
}
