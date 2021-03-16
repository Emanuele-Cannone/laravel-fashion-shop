<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class ProductController extends Controller
{
    public function index(){
        $data = [
         'saluto' => 'io sono la pagina prodotti'
        ];
        return view('prodotti', $data);
    }

    public function dresses(){
        $prodotti = Dress::All();
        $data = [
            'dresses' => $prodotti,  
        ];
        return view('prodotti', $data);
    }

    public function storia(){
        $data = [
            'saluto' => 'io sono la pagina storia'
        ];
        return view('storia', $data);
    }
}
