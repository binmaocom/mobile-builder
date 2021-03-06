<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c988ac8ff415cdb4ab2f537c76b5c10
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c988ac8ff415cdb4ab2f537c76b5c10::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c988ac8ff415cdb4ab2f537c76b5c10::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
