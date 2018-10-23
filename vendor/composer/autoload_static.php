<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitadd6831b4569090e4a0a7ef099eddae8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitadd6831b4569090e4a0a7ef099eddae8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitadd6831b4569090e4a0a7ef099eddae8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}