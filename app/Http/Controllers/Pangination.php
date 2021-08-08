<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pangination extends Controller
{
    public function pangi(){

        return view ('news');
    }
}