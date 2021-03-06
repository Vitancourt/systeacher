<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite46f7bcfc7a159ecf0994ba34465711e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'System\\Core\\' => 12,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Application\\Model\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'System\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system/core',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Application\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application/model',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite46f7bcfc7a159ecf0994ba34465711e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite46f7bcfc7a159ecf0994ba34465711e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
