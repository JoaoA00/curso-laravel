<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $fruta = 'Maçãs';
    $quantidade = 2;

    $arr = [1,2,3,4,5,6,7];

    return view('welcome', 
        [
            'array' => $arr,
            'fruta' => $fruta, 
            'quantidade' => $quantidade
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/product/{id?}', function ($id = 1) {
    return view('product', ['id' => $id]);
});

