<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //

    public function tests($sport){
        return view("child")->with(compact('sport'));
    }

}
