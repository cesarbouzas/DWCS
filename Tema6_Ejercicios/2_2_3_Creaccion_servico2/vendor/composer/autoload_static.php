<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53ea8ad895accedd1bf7a851102031bd
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wingu\\OctopusCore\\Reflection\\' => 29,
        ),
        'P' => 
        array (
            'PHP2WSDL\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wingu\\OctopusCore\\Reflection\\' => 
        array (
            0 => __DIR__ . '/..' . '/wingu/reflection/src',
        ),
        'PHP2WSDL\\' => 
        array (
            0 => __DIR__ . '/..' . '/php2wsdl/php2wsdl/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53ea8ad895accedd1bf7a851102031bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53ea8ad895accedd1bf7a851102031bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53ea8ad895accedd1bf7a851102031bd::$classMap;

        }, null, ClassLoader::class);
    }
}
