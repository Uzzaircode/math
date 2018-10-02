<?php

namespace Uzzaircode\Math;

use App\Http\Controllers\Controller;


class MathController extends Controller{

    public function index(){
        return "hello";
    }

    public function multiply($a, $b){
        return $a * $b;
    }
}