<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($num1, $num2){
        $result = $num1 + $num2;
        return view('sum', compact('result'));
    }

    public function sub(){
       $url = request()->url ();
       return $url;
    }

    public function mul(){
        return 'create new mul';
    }

    public function div(){
        return 'create new div';
    }
}
