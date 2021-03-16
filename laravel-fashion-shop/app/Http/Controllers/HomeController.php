<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    $data = [
       'saluto' => 'io sono la home'
    ];
    return view('home', $data);
    }
}
