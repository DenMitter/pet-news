<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfca0e4cc0389f4d311a1a833462ead4e
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

        spl_autoload_register(array('ComposerAutoloaderInitfca0e4cc0389f4d311a1a833462ead4e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfca0e4cc0389f4d311a1a833462ead4e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfca0e4cc0389f4d311a1a833462ead4e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
