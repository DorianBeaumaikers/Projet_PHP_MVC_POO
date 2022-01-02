<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaf547c0a5ffe0bb8f0ecac0200cc5b8
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\Classes\\' => 13,
        ),
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core/classes',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbaf547c0a5ffe0bb8f0ecac0200cc5b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbaf547c0a5ffe0bb8f0ecac0200cc5b8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbaf547c0a5ffe0bb8f0ecac0200cc5b8::$classMap;

        }, null, ClassLoader::class);
    }
}
