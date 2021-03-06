<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Driver
    |--------------------------------------------------------------------------
    |
    | Laravel supports both SMTP and PHP's "mail" function as drivers for the
    | sending of e-mail. You may specify which one you're using throughout
    | your application here. By default, Laravel is setup for SMTP mail.
    |
    | Supported: "smtp", "mail", "sendmail", "mailgun", "mandrill",
    |            "ses", "sparkpost", "log"
    |
    */

    'driver' => env('MAIL_DRIVER', 'smtp'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Host Address
    |--------------------------------------------------------------------------
    |
    | Here you may provide the host address of the SMTP server used by your
    | applications. A default option is provided that is compatible with
    | the Mailgun mail service which will provide reliable deliveries.
    |
    */

//    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    // 'host' => env('MAIL_HOST', 'mail.indonusasolutama.com'),
        'host' => env('MAIL_HOST', 'smtp.mailgun.org'),


    /*
    |--------------------------------------------------------------------------
    | SMTP Host Port
    |--------------------------------------------------------------------------
    |
    | This is the SMTP port used by your application to deliver e-mails to
    | users of the application. Like the host we have set this value to
    | stay compatible with the Mailgun e-mail application by default.
    |
    */

    'port' => env('MAIL_PORT', 587),

    /*
    |--------------------------------------------------------------------------
    | Global "From" Address
    |--------------------------------------------------------------------------
    |
    | You may wish for all e-mails sent by your application to be sent from
    | the same address. Here, you may specify a name and address that is
    | used globally for all e-mails that are sent by your application.
    |
    */

    // 'from' => [
    //     'address' => env('MAIL_FROM_ADDRESS', 'testing.fendi@indonusasolutama.com'),
    //     'name' => env('MAIL_FROM_NAME', 'Fendi Septiawan'),
    // ],
//    'from' => [
//        'address' => env('MAIL_FROM_ADDRESS', 'fendi.septiawan0709@gmail.com'),
//        'name' => env('MAIL_FROM_NAME', 'EMR Indonusa Solutama'),
//    ],
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'admin@emr.com'),
        'name' => env('MAIL_FROM_NAME', 'Electronic Medical Record'),
    ],
    /*
    |--------------------------------------------------------------------------
    | E-Mail Encryption Protocol
    |--------------------------------------------------------------------------
    |
    | Here you may specify the encryption protocol that should be used when
    | the application send e-mail messages. A sensible default using the
    | transport layer security protocol should provide great security.
    |
    */

    'encryption' => env('MAIL_ENCRYPTION', 'tls'),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Username
    |--------------------------------------------------------------------------
    |
    | If your SMTP server requires a username for authentication, you should
    | set it here. This will get used to authenticate with your server on
    | connection. You may also set the "password" value below this one.
    |
    */

    // 'username' => env('MAIL_USERNAME', base64_decode('dGVzdGluZy5mZW5kaUBpbmRvbnVzYXNvbHV0YW1hLmNvbQ==')),
    'username' => env('MAIL_USERNAME', base64_decode('ZmVuZGkuc2VwdGlhd2FuMDcwOUBnbWFpbC5jb20=')),

    /*
    |--------------------------------------------------------------------------
    | SMTP Server Password
    |--------------------------------------------------------------------------
    |
    | Here you may set the password required by your SMTP server to send out
    | messages from your application. This will be given to the server on
    | connection so that the application will be able to send messages.
    |
    */

    // 'password' => env('MAIL_PASSWORD', base64_decode('VGVzdGluZ2ZlbmRpMQ==')),
    'password' => env('MAIL_PASSWORD', base64_decode('OTBuZGFuZzA3MDk=')),

    /*
    |--------------------------------------------------------------------------
    | Sendmail System Path
    |--------------------------------------------------------------------------
    |
    | When using the "sendmail" driver to send e-mails, we will need to know
    | the path to where Sendmail lives on this server. A default path has
    | been provided here, which will work well on most of your systems.
    |
    */

    'sendmail' => '/usr/sbin/sendmail -bs',

];
