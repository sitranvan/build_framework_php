<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit984abdaaa7fcf75802ce7f7b9c7923e0
{
    public static $files = array (
        'c8b72ffb2ca4a023769f7930823d379d' => __DIR__ . '/../..' . '/app/helpers/functions.php',
        '1619dc018b8a14d364e3e27758807230' => __DIR__ . '/../..' . '/templates/template.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Providers\\' => 14,
            'App\\Model\\' => 10,
            'App\\Middlewares\\' => 16,
            'App\\Core\\' => 9,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/providers',
        ),
        'App\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Middlewares\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/middlewares',
        ),
        'App\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit984abdaaa7fcf75802ce7f7b9c7923e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit984abdaaa7fcf75802ce7f7b9c7923e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit984abdaaa7fcf75802ce7f7b9c7923e0::$classMap;

        }, null, ClassLoader::class);
    }
}
