<?php
use Cake\Routing\Router;

Router::plugin(
    'Gerrymcdonnell/Pushy',
    ['path' => '/gerrymcdonnell/pushy'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
