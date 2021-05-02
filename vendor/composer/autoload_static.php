<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5085f044cc8904887e71758dd9c1c196
{
    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/Controllers/AdminController.php',
        'App\\Controllers\\AuthController' => __DIR__ . '/../..' . '/Controllers/AuthController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/Controllers/PagesController.php',
        'App\\Controllers\\PaymentsController' => __DIR__ . '/../..' . '/Controllers/PaymentsController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/Controllers/ProductsController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/Core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/Core/Database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/Core/Database/QueryBuilder.php',
        'App\\Core\\DbProducts' => __DIR__ . '/../..' . '/Core/DbProducts.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/Core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/Core/Router.php',
        'App\\Core\\Users' => __DIR__ . '/../..' . '/Core/Users.php',
        'ComposerAutoloaderInit5085f044cc8904887e71758dd9c1c196' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit5085f044cc8904887e71758dd9c1c196' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5085f044cc8904887e71758dd9c1c196::$classMap;

        }, null, ClassLoader::class);
    }
}
