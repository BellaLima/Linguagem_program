<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27bfe3bb856807a9ebd0149d5730dfde
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aluno\\Projeto0405\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aluno\\Projeto0405\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit27bfe3bb856807a9ebd0149d5730dfde::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit27bfe3bb856807a9ebd0149d5730dfde::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit27bfe3bb856807a9ebd0149d5730dfde::$classMap;

        }, null, ClassLoader::class);
    }
}
