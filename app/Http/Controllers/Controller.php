<?php


namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function create(){

        return view('formulario');
    }

    public function store (Request $request){
      
    $num1 = $request ->num1;
    $num2 = $request ->num2;
    $num3 = $request ->num3;

      
       


        
    }
}

