<?php

// autoload_framework_real.php @generated by Composer

class ComposerAutoloaderInit1f26aac0a5c1887bcdab775a0f87f83f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit1f26aac0a5c1887bcdab775a0f87f83f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit1f26aac0a5c1887bcdab775a0f87f83f', 'loadClassLoader'));

        $classMap = require __DIR__ . '/autoload_framework_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }
        $loader->register(true);

        return $loader;
    }
}
