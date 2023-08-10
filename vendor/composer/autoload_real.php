<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf10ccf40d1a82e5e95bb006653e3f7f4
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitf10ccf40d1a82e5e95bb006653e3f7f4', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf10ccf40d1a82e5e95bb006653e3f7f4', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf10ccf40d1a82e5e95bb006653e3f7f4::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}