<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5268ba3168be99c79ffc6d2c6c2092df
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5268ba3168be99c79ffc6d2c6c2092df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5268ba3168be99c79ffc6d2c6c2092df::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5268ba3168be99c79ffc6d2c6c2092df::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
