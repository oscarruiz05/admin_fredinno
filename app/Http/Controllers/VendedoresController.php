<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    public function index(){
        return view('vendedores.index');
    }
}
