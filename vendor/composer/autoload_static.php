<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29a1c79a48142b206e7a843bef9a4d14
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Routeur\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Routeur\\' => 
        array (
            0 => __DIR__ . '/../..' . '/routes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29a1c79a48142b206e7a843bef9a4d14::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29a1c79a48142b206e7a843bef9a4d14::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
