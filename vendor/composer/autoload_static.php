<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcaa83169ac1c7ee99c2268489f14ad8f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcaa83169ac1c7ee99c2268489f14ad8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcaa83169ac1c7ee99c2268489f14ad8f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcaa83169ac1c7ee99c2268489f14ad8f::$classMap;

        }, null, ClassLoader::class);
    }
}
