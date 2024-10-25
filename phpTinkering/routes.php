<?php
//definim les rutes
return [
    '/' => 'App/Controllers/HomeController@index',
    '/index.php' => 'App/Controllers/HomeController@index',
    '/index' => 'App/Controllers/HomeController@index',
    '/home' => 'App/Controllers/HomeController@index',

    // Rutas para FilmController
    '/films' => 'App/Controllers/FilmController@index',
    '/create' => 'App/Controllers/FilmController@create',
    '/store' => 'App/Controllers/FilmController@store',
    '/edit' => 'App/Controllers/FilmController@edit',
    '/update' => 'App/Controllers/FilmController@update',
    '/delete' => 'App/Controllers/FilmController@delete',
    '/destroy' => 'App/Controllers/FilmController@destroy',

    // Rutas para VehicleController
    '/models' => 'App/Controllers/VehicleController@index',
    '/models/create' => 'App/Controllers/VehicleController@create',
    '/models/store' => 'App/Controllers/VehicleController@store',
    '/models/edit' => 'App/Controllers/VehicleController@edit',
    '/models/update' => 'App/Controllers/VehicleController@update',
    '/models/delete' => 'App/Controllers/VehicleController@delete',
    '/models/destroy' => 'App/Controllers/VehicleController@destroy',
];