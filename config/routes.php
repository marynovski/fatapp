<?php
    $routes = [
        'homepage' => [
            'controller'      => 'HomeController',
            'function'        => 'home',
            'methods_allowed' => [
                'get',
            ],
        ],
        'login' => [
            'controller'      => 'SecurityController',
            'function'        => 'login',
            'methods_allowed' => [
                'get',
                'post',
            ],
        ],
    ];