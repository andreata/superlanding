<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit610898806fcee104145d6121b2f40c91
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit610898806fcee104145d6121b2f40c91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit610898806fcee104145d6121b2f40c91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
