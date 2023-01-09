<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->group(['prefix' => 'dosen'], function () use ($router){
//     $router->get('/', 'DosenController@getAll');
//     $router->get('/', 'DosenController@getOne');
//     $router->get('/', 'DosenController@addOne');
//     $router->get('/', 'DosenController@updateOne');
//     $router->get('/', 'DosenController@deleteOne');
// });

$router->get('/nama', function () {
    return "Nama : YANUAR NUR AKBAR";
});
$router->get('/usia', function () {
    return "Usia : 20 Tahun";
});
$router->get('/alamat', function () {
    return "Alamat : BAWEAN";
});
$router->get('/profil', function () {
    return "{YANUAR NUR AKBAR},{20 Tahun},{BAWEAN}";
});

$router->get('/siswa/{nama}', function ($nama) {
    $siswa =[
        "ali" => [
            "Nama" => "Ali Khilos",
            "Usia" => "20",
            "City" => "Malang"
        ],
        "kholis" => [
            "Nama" => "Kholis Nur Cahyo",
            "Usia" => "22",
            "City" => "Kediri"
        ],
        "nur" => [
            "Nama" => "Nur Cahyani",
            "Usia" => "19",
            "City" => "Blitar"
        ]
        ];
        if (isset($siswa[$nama])){
            return $siswa[$nama];
        } else{
            return "Nama tidak ada dalam daftar";
        }
    });

    $router->group(['prefix' => 'kelas'], function() use($router){
        $router->get('siswa', function(){
            return ["{nama : Ali Khilos}, {kelas : Framework Prgramming}", "{nama : Kholis Nur Cahyo}, {kelas : Mobile Prgramming}", "{nama : Nur Cahyani}, {kelas : Front End Prgramming}"];
        });
    });

    $router->group(['prefix' => 'siswa'], function() use($router){
        $router->get('/', 'siswaController@index');
    });

    $router->group(['prefix' => 'kelas'], function() use($router){
        $router->get('/', 'kelasController@index');
    });
    