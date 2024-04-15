<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit6675c77f60dc3445c239b34e4a9a906c
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

        spl_autoload_register(array('ComposerAutoloaderInit6675c77f60dc3445c239b34e4a9a906c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit6675c77f60dc3445c239b34e4a9a906c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit6675c77f60dc3445c239b34e4a9a906c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}