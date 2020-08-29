<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5a6075d08cdf53abcdb8cd49c7cfd0b9
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Edu\\board\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Edu\\board\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5a6075d08cdf53abcdb8cd49c7cfd0b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5a6075d08cdf53abcdb8cd49c7cfd0b9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
