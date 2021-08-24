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

        $url_imagen = '';

        if($request['imagen_producto']){
            $imagen = $request->file('imagen_producto')->store('public/imagenes/productos');
            $url_imagen = Storage::url($imagen);
        }

        $producto = Producto::create([
            'codigo' => $request['codigo'],
            'nombre' => $request['nombre'],
            'precio' => $request['precio'],
            'imagen' => $url_imagen,
            'estado' => 'disponible'
        ]);
        return redirect()->back();
    }

    public function show($id){
        $producto = Producto::find($id);
        return $producto;
    }

    public function update(Request $request){
        $producto = Producto::find($request['id_producto']);
        $url_imagen = $producto->imagen;

        if($request['imagen_producto']){
            $url_delete = str_replace('storage', 'public', $producto->imagen);
            Storage::delete($url_delete);
            $imagen = $request->file('imagen_producto')->store('public/imagenes/productos');
            $url_imagen = Storage::url($imagen);
        }

        $producto->update([
            'codigo' => $request['codigo'],
            'nombre' => $request['nombre'],
            'precio' => $request['precio'],
            'imagen' => $url_imagen
        ]);

        return redirect()->back();
    }

    public function delete($id){
        $producto = Producto::find($id);
        $producto->delete();
    }

}
