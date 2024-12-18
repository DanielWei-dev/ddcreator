<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d783c023b53bfafbf753bae2d6987ca
{
    public static $files = array (
        '9b552a3cc426e3287cc811caefa3cf53' => __DIR__ . '/..' . '/topthink/think-helper/src/helper.php',
        '35fab96057f1bf5e7aba31a8a6d5fdde' => __DIR__ . '/..' . '/topthink/think-orm/stubs/load_stubs.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        'a1c5db8f2d9d2021726fa8cb34b3179f' => __DIR__ . '/..' . '/wd/ddlibrary/src/common.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\view\\driver\\' => 18,
            'think\\migration\\' => 16,
            'think\\admin\\install\\' => 20,
            'think\\admin\\' => 12,
            'think\\' => 6,
        ),
        'a' => 
        array (
            'app\\admin\\' => 10,
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'Phinx\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\view\\driver\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-view/src',
        ),
        'think\\migration\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-migration/src',
        ),
        'think\\admin\\install\\' => 
        array (
            0 => __DIR__ . '/..' . '/wd/ddinstall/src',
        ),
        'think\\admin\\' => 
        array (
            0 => __DIR__ . '/..' . '/wd/ddlibrary/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-helper/src',
            1 => __DIR__ . '/..' . '/topthink/think-orm/src',
            2 => __DIR__ . '/..' . '/topthink/think-template/src',
            3 => __DIR__ . '/..' . '/topthink/framework/src/think',
        ),
        'app\\admin\\' => 
        array (
            0 => __DIR__ . '/..' . '/wd/ddadmin/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Phinx\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-migration/phinx',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/extend',
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Ip2Region' => __DIR__ . '/..' . '/wd/ddip2region/Ip2Region.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'XdbSearcher' => __DIR__ . '/..' . '/wd/ddip2region/XdbSearcher.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d783c023b53bfafbf753bae2d6987ca::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d783c023b53bfafbf753bae2d6987ca::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInit0d783c023b53bfafbf753bae2d6987ca::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit0d783c023b53bfafbf753bae2d6987ca::$classMap;

        }, null, ClassLoader::class);
    }
}
