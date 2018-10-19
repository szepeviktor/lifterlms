<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1f173ac62db749abf5d26711061e537
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LLMS\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LLMS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1f173ac62db749abf5d26711061e537::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1f173ac62db749abf5d26711061e537::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}