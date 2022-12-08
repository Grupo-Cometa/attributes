<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8c9ff869dc2229ae20126bda0a11b11
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cometa\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cometa\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8c9ff869dc2229ae20126bda0a11b11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8c9ff869dc2229ae20126bda0a11b11::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8c9ff869dc2229ae20126bda0a11b11::$classMap;

        }, null, ClassLoader::class);
    }
}