<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9ef418383fdfbb304d0ef2207cc96e74
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eloquent\\Enumeration\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eloquent\\Enumeration\\' => 
        array (
            0 => __DIR__ . '/..' . '/eloquent/enumeration/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'V' => 
        array (
            'Valitron' => 
            array (
                0 => __DIR__ . '/..' . '/vlucas/valitron/src',
            ),
        ),
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'EasyPeasyICS' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/EasyPeasyICS.php',
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9ef418383fdfbb304d0ef2207cc96e74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9ef418383fdfbb304d0ef2207cc96e74::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9ef418383fdfbb304d0ef2207cc96e74::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9ef418383fdfbb304d0ef2207cc96e74::$classMap;

        }, null, ClassLoader::class);
    }
}
