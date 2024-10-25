<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index(){

        $fruta = 'Maçãs';
        $quantidade = 2;

        $arr = [1,2,3,4,5,6,7];

        return view('welcome', 
            [
                'array' => $arr,
                'fruta' => $fruta, 
                'quantidade' => $quantidade
        ]);
    }

    public function create(){

        return view('events.create');

    }


}
