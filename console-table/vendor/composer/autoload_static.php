<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd32948faf5d541f9f0220bbea983fb1b
{
    public static $prefixesPsr0 = array (
        'L' => 
        array (
            'LucidFrame\\' => 
            array (
                0 => __DIR__ . '/..' . '/phplucidframe/console-table/src',
            ),
            'LucidFrameTest\\' => 
            array (
                0 => __DIR__ . '/..' . '/phplucidframe/console-table/tests',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd32948faf5d541f9f0220bbea983fb1b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd32948faf5d541f9f0220bbea983fb1b::$classMap;

        }, null, ClassLoader::class);
    }
}
