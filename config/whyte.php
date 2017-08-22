<?php

return [

    'project' => [
        'name' => env('APP_NAME','Whyte Creations'),
        'logo' => 'project/images/logo.png',
        'link' => '/',
        'theme-color'=> '#2a327a',
        'theme-font-color'=> '#fdc20f',
        'secondary-color'=> '#FFF',
    ],

    'admin' => [
        'name' => 'Admin',
        'username' => 'admin',
        'password' => '123456',
        'email'    => 'info@fullfilla.com',
        'copyright' => '© 2016 '.env('APP_NAME','Whyte Creations').'. All Rights Reserved.',
        'copyright_link' => '/',
    ],

];
