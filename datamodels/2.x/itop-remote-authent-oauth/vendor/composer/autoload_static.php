<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd52424b43ff18219f2ec935428aff074
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Combodo\\iTop\\RemoteAuthentOAuth\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Combodo\\iTop\\RemoteAuthentOAuth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Combodo\\iTop\\RemoteAuthentOAuth\\Controller\\AjaxRemoteAuthentOauthController' => __DIR__ . '/../..' . '/src/Controller/AjaxRemoteAuthentOauthController.php',
        'Combodo\\iTop\\RemoteAuthentOAuth\\Controller\\RemoteAuthentOauthController' => __DIR__ . '/../..' . '/src/Controller/RemoteAuthentOauthController.php',
        'Combodo\\iTop\\RemoteAuthentOAuth\\Service\\ApplicationObjectExtension' => __DIR__ . '/../..' . '/src/Service/ApplicationObjectExtension.php',
        'Combodo\\iTop\\RemoteAuthentOAuth\\Service\\PopupMenuExtension' => __DIR__ . '/../..' . '/src/Service/PopupMenuExtension.php',
        'Combodo\\iTop\\RemoteAuthentOAuth\\Service\\RemoteAuthentOAuthService' => __DIR__ . '/../..' . '/src/Service/RemoteAuthentOAuthService.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd52424b43ff18219f2ec935428aff074::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd52424b43ff18219f2ec935428aff074::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd52424b43ff18219f2ec935428aff074::$classMap;

        }, null, ClassLoader::class);
    }
}
