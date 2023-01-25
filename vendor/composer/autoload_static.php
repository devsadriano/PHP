<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7b4283c47fa35b49e8da3fc0cc6bd71
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classess\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classess\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classess',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc7b4283c47fa35b49e8da3fc0cc6bd71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc7b4283c47fa35b49e8da3fc0cc6bd71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc7b4283c47fa35b49e8da3fc0cc6bd71::$classMap;

        }, null, ClassLoader::class);
    }
}
