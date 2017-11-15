<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6254b97d876487124198032af8303988
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInit6254b97d876487124198032af8303988' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit6254b97d876487124198032af8303988' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit6254b97d876487124198032af8303988::$classMap;

        }, null, ClassLoader::class);
    }
}
