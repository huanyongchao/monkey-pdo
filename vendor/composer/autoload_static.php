<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitacf7bdc8189ffca2c65973e154c2bf40
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Moneky\\PDO\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Moneky\\PDO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitacf7bdc8189ffca2c65973e154c2bf40::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitacf7bdc8189ffca2c65973e154c2bf40::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitacf7bdc8189ffca2c65973e154c2bf40::$classMap;

        }, null, ClassLoader::class);
    }
}