<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        $data = [
         'saluto' => 'io sono la pagina prodotti'
        ];
        return view('home', $data);
    }
}
