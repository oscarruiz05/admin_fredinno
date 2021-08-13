<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public $date;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->date = Carbon::now('America/Bogota');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){

        $productos = Producto::paginate(10);
        return view('productos.index', ['productos' => $productos]);
    }
     public function store(Request $request){
         $extencion = pathinfo($request->file('imagen')->getClientOriginalName(), PATHINFO_EXTENSION);
         $ruta = 'imagenes/productos/';
         $nombre = 'producto_'.$this->date->isoFormat('YMMDDHmmss').'.'.$extencion;
         Storage::disk('public')->put($ruta.$nombre, File::get($request->file('imagen')));
         $imagen = $ruta.$nombre;
        $producto = Producto::create([
            'codigo' => $request['codigo'],
            'nombre' => $request['nombre'],
            'precio' => $request['precio'],
            'imagen' => $imagen,
            'estado' => 'disponible'
        ]);
        return redirect()->back();
    }

    public function get_product(Request $request) {
        return Producto::find($request['id']);
    }
}
