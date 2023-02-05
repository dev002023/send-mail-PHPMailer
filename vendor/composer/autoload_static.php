<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f38a98714c3fa0d61b9e78071cbd92f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f38a98714c3fa0d61b9e78071cbd92f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f38a98714c3fa0d61b9e78071cbd92f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4f38a98714c3fa0d61b9e78071cbd92f::$classMap;

        }, null, ClassLoader::class);
    }
}
