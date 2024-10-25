<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

}
