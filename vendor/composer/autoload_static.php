<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49b1041700f188c3783353bb5aa68a62
{
    public static $files = array (
        '5c2defbf7f7cf93c47ed4965a7eb595e' => __DIR__ . '/..' . '/seregazhuk/pinterest-bot/src/Helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'seregazhuk\\PinterestBot\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'seregazhuk\\PinterestBot\\' => 
        array (
            0 => __DIR__ . '/..' . '/seregazhuk/pinterest-bot/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit49b1041700f188c3783353bb5aa68a62::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49b1041700f188c3783353bb5aa68a62::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
