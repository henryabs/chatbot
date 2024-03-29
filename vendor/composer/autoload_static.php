<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f40c87654d5069e24923e4654042362
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Henryabs\\Chatbot\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Henryabs\\Chatbot\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f40c87654d5069e24923e4654042362::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f40c87654d5069e24923e4654042362::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f40c87654d5069e24923e4654042362::$classMap;

        }, null, ClassLoader::class);
    }
}
