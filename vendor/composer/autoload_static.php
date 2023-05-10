<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb33373713bd443c32c867d74002a7f89
{
    public static $files = array (
        '386dcde545e1ce46385ccb39314712ef' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jz\\WebmanHashids\\' => 17,
        ),
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jz\\WebmanHashids\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb33373713bd443c32c867d74002a7f89::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb33373713bd443c32c867d74002a7f89::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb33373713bd443c32c867d74002a7f89::$classMap;

        }, null, ClassLoader::class);
    }
}
