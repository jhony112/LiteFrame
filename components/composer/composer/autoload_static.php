<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3415c2c4388dd0e1e5127b361bb44082
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'M' => 
        array (
            'Models\\' => 7,
            'Middlewares\\' => 12,
        ),
        'L' => 
        array (
            'LiteOnion\\' => 10,
            'LiteFrame\\' => 10,
        ),
        'G' => 
        array (
            'GO\\' => 3,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
            'Controllers\\' => 12,
            'Commands\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Models\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/app/Models',
        ),
        'Middlewares\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/app/Middlewares',
        ),
        'LiteOnion\\' => 
        array (
            0 => __DIR__ . '/..' . '/avonnadozie/liteonion/src',
        ),
        'LiteFrame\\' => 
        array (
            0 => __DIR__ . '/..' . '/liteframe/liteframe-core/src/liteframe',
        ),
        'GO\\' => 
        array (
            0 => __DIR__ . '/..' . '/peppeocchi/php-cron-scheduler/src/GO',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/cron-expression/src/Cron',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/app/Controllers',
        ),
        'Commands\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/app/Commands',
        ),
    );

    public static $classMap = array (
        'PHPUnit_Framework_TestCase' => __DIR__ . '/..' . '/liteframe/liteframe-core/src/libraries/PHPUnitFill/TestCase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3415c2c4388dd0e1e5127b361bb44082::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3415c2c4388dd0e1e5127b361bb44082::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3415c2c4388dd0e1e5127b361bb44082::$classMap;

        }, null, ClassLoader::class);
    }
}