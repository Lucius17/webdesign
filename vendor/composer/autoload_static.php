<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit089fbaec922f66991f92a3280300cc3e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit089fbaec922f66991f92a3280300cc3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit089fbaec922f66991f92a3280300cc3e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit089fbaec922f66991f92a3280300cc3e::$classMap;

        }, null, ClassLoader::class);
    }
}