<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
       return view('facturas.index');
    }

    public function show(){
        return view('facturas.ver');
    }
}
