<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit717586bfe6c6ceed229ae23a2ce4a994
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

        spl_autoload_register(array('ComposerAutoloaderInit717586bfe6c6ceed229ae23a2ce4a994', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit717586bfe6c6ceed229ae23a2ce4a994', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit717586bfe6c6ceed229ae23a2ce4a994::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}