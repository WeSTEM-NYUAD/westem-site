<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/meganmoore/Documents/weSTEM/westem-site/user/plugins/email/email.yaml',
    'modified' => 1507541949,
    'data' => [
        'enabled' => true,
        'from' => 'nyuadwestem@gmail.com',
        'from_name' => 'westem',
        'to' => 'nyuadwestem@gmail.com',
        'to_name' => 'westem',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
