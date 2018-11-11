<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0ebdc0a4d8275345611201fe7a2016c
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'atk4\\ui\\' => 8,
            'atk4\\mastercrud\\' => 16,
            'atk4\\filestore\\' => 15,
            'atk4\\dsql\\' => 10,
            'atk4\\data\\' => 10,
            'atk4\\core\\' => 10,
        ),
        'S' => 
        array (
            'Spatie\\FlysystemDropbox\\' => 24,
            'Spatie\\Dropbox\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\Flysystem\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'atk4\\ui\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/ui/src',
        ),
        'atk4\\mastercrud\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/mastercrud/src',
        ),
        'atk4\\filestore\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/filestore/src',
        ),
        'atk4\\dsql\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/dsql/src',
        ),
        'atk4\\data\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/data/src',
        ),
        'atk4\\core\\' => 
        array (
            0 => __DIR__ . '/..' . '/atk4/core/src',
        ),
        'Spatie\\FlysystemDropbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/flysystem-dropbox/src',
        ),
        'Spatie\\Dropbox\\' => 
        array (
            0 => __DIR__ . '/..' . '/spatie/dropbox-api/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Dropbox' => 
            array (
                0 => __DIR__ . '/..' . '/dropbox/dropbox-sdk/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0ebdc0a4d8275345611201fe7a2016c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0ebdc0a4d8275345611201fe7a2016c::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInitc0ebdc0a4d8275345611201fe7a2016c::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc0ebdc0a4d8275345611201fe7a2016c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}