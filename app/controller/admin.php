<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){ // if there is no value
    $route[1] = 'index';
}

$menus = [
    'index' => [
        'title' => 'Anasayfa' ,
        'icon' => 'home'
    ],
    'users' => [
        'title' => 'Üyeler',
        'icon' => 'user',
        'submenu' => [
            'add-user' => 'Üye ekle',
            'users' => 'Üyeleri Listele'
        ]
        ],
    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog'
    ]
] ;

require admin_controller(route(1));