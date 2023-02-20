<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b6988845c7fdc1d4bb64aba6af3ca5c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b6988845c7fdc1d4bb64aba6af3ca5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b6988845c7fdc1d4bb64aba6af3ca5c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b6988845c7fdc1d4bb64aba6af3ca5c::$classMap;

        }, null, ClassLoader::class);
    }
}