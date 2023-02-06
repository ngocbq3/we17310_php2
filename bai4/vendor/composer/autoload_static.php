<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit335d8eaa7f26936c5bc969de96b6eb16
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit335d8eaa7f26936c5bc969de96b6eb16::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit335d8eaa7f26936c5bc969de96b6eb16::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit335d8eaa7f26936c5bc969de96b6eb16::$classMap;

        }, null, ClassLoader::class);
    }
}