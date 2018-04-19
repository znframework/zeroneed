<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18a22f10e44b8b77ed023b6677d08bad
{
    public static $files = array ();

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZN\\XML\\' => 7,
            'ZN\\Validation\\' => 14,
            'ZN\\Storage\\' => 11,
            'ZN\\Shopping\\' => 12,
            'ZN\\Services\\' => 12,
            'ZN\\Security\\' => 12,
            'ZN\\Response\\' => 12,
            'ZN\\Request\\' => 11,
            'ZN\\Remote\\' => 10,
            'ZN\\Protection\\' => 14,
            'ZN\\Prompt\\' => 10,
            'ZN\\Pagination\\' => 14,
            'ZN\\Language\\' => 12,
            'ZN\\Image\\' => 9,
            'ZN\\Hypertext\\' => 13,
            'ZN\\Helpers\\' => 11,
            'ZN\\Generator\\' => 13,
            'ZN\\Filesystem\\' => 14,
            'ZN\\Email\\' => 9,
            'ZN\\DateTime\\' => 12,
            'ZN\\Database\\' => 12,
            'ZN\\DataTypes\\' => 13,
            'ZN\\Cryptography\\' => 16,
            'ZN\\Crontab\\' => 11,
            'ZN\\Console\\' => 11,
            'ZN\\Compression\\' => 15,
            'ZN\\Comparison\\' => 14,
            'ZN\\Captcha\\' => 11,
            'ZN\\Cache\\' => 9,
            'ZN\\Buffering\\' => 13,
            'ZN\\Authorization\\' => 17,
            'ZN\\Authentication\\' => 18,
            'ZN\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZN\\XML\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-xml',
        ),
        'ZN\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-validation',
        ),
        'ZN\\Storage\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-storage',
        ),
        'ZN\\Shopping\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-shopping',
        ),
        'ZN\\Services\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-services',
        ),
        'ZN\\Security\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-security',
        ),
        'ZN\\Response\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-response',
        ),
        'ZN\\Request\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-request',
        ),
        'ZN\\Remote\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-remote',
        ),
        'ZN\\Protection\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-protection',
        ),
        'ZN\\Prompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-prompt',
        ),
        'ZN\\Pagination\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-pagination',
        ),
        'ZN\\Language\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-language',
        ),
        'ZN\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-image',
        ),
        'ZN\\Hypertext\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-hypertext',
        ),
        'ZN\\Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-helpers',
        ),
        'ZN\\Generator\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-generator',
        ),
        'ZN\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-filesystem',
        ),
        'ZN\\Email\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-email',
        ),
        'ZN\\DateTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-datetime',
        ),
        'ZN\\Database\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-database',
        ),
        'ZN\\DataTypes\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-datatypes',
        ),
        'ZN\\Cryptography\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-cryptography',
        ),
        'ZN\\Crontab\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-crontab',
        ),
        'ZN\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-console',
        ),
        'ZN\\Compression\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-compression',
        ),
        'ZN\\Comparison\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-comparison',
        ),
        'ZN\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-captcha',
        ),
        'ZN\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-cache',
        ),
        'ZN\\Buffering\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-buffering',
        ),
        'ZN\\Authorization\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-authorization',
        ),
        'ZN\\Authentication\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-authentication',
        ),
        'ZN\\' => 
        array (
            0 => __DIR__ . '/..' . '/package-zerocore',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18a22f10e44b8b77ed023b6677d08bad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18a22f10e44b8b77ed023b6677d08bad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
