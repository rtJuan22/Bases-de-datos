<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   

    public function create() {

        return view('formulario');
       
    }

    public function Stores(Request $request){

      $num1 = $request ->num1;
      $num2 = $request ->num2;
      $num3 = $request ->num3;

      $prom = $num1+$num2+$num3/3;

      return "El promedio de las notas es ".$prom;


    }



}