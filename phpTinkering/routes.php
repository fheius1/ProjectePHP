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

    // Rutas para ModelController
//    '/models' => 'App/Controllers/ModelController@index',
//    '/models/create' => 'App/Controllers/ModelController@create',
//    '/models/store' => 'App/Controllers/ModelController@store',
//    '/models/edit' => 'App/Controllers/ModelController@edit',
//    '/models/update' => 'App/Controllers/ModelController@update',
//    '/models/delete' => 'App/Controllers/ModelController@delete',
//    '/models/destroy' => 'App/Controllers/ModelController@destroy',
];