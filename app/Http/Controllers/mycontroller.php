<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    // 
    function show_me($name){
        return $name;
    }

}