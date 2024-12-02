<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit36a0e235357d4d60eff715cd2e182696
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit36a0e235357d4d60eff715cd2e182696::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit36a0e235357d4d60eff715cd2e182696::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit36a0e235357d4d60eff715cd2e182696::$classMap;

        }, null, ClassLoader::class);
    }
}