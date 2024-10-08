<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit17f3b54fd1a96320320cd84a416bd865
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

        spl_autoload_register(array('ComposerAutoloaderInit17f3b54fd1a96320320cd84a416bd865', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit17f3b54fd1a96320320cd84a416bd865', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit17f3b54fd1a96320320cd84a416bd865::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
