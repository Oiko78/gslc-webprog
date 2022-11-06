<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        "products" => [
            [
                "id" => 1,
                "image" => "default.jpg",
                "name" => "Lorem ipsum dolor",
                "category" => "Pop",
                "price" => 214241,
                "qty" => 0
            ],
            [
                "id" => 2,
                "image" => "default.jpg",
                "name" => "Lorem ipsum dolor",
                "category" => "Pop",
                "price" => 214241,
                "qty" => 10
            ],
            [
                "id" => 1,
                "image" => "default2.jpg",
                "name" => "Lorem ipsum dolor",
                "category" => "Pop",
                "price" => 214241,
                "qty" => 0
            ],
            [
                "id" => 1,
                "image" => "default2.jpg",
                "name" => "Lorem ipsum dolor",
                "category" => "Pop",
                "price" => 214241,
                "qty" => 2
            ],
        ]
    ]);
});
