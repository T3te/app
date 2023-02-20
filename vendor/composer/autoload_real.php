<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0b6988845c7fdc1d4bb64aba6af3ca5c
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit0b6988845c7fdc1d4bb64aba6af3ca5c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0b6988845c7fdc1d4bb64aba6af3ca5c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0b6988845c7fdc1d4bb64aba6af3ca5c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}