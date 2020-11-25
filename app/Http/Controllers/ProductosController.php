<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Categoria;
use App\Proveedor;
use App\User;
use App\Producto;
class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=User::find(Auth::id())->categorias;
        $proveedores=User::find(Auth::id())->proveedores;

        return view("productos.index", compact( "proveedores", "categorias"));
    }

    public function list(Request $request){
        $productosBuscados = Producto::where('user_id', Auth::id())
        ->where('categoria_id', $request->input('categoria'))
        ->where('proveedor_id', $request->input('proveedor'))
        ->get();

        return view("productos.list", compact("productosBuscados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=User::find(Auth::id())->categorias;
        $proveedores=User::find(Auth::id())->proveedores;

        return view("productos.create", compact("categorias", "proveedores"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Producto= new Producto;

        $this->validate($request,
        ['codigo_barras' => 'required|numeric|unique:productos,codigo_barras',
        'descripcion' => 'required',
        'costo_compra' => 'required|between:0,99999999|numeric',
        'precio_venta' => 'required|between:0,99999999|numeric',
        'existencia' => 'required|between:0,99999999|integer',
        'stock_minimo' => 'required|between:0,99999999|integer']);

        $Producto->proveedor_id=$request->proveedor;
        $Producto->categoria_id=$request->categoria;
        $Producto->user_id=Auth::id();
        $Producto->codigo_barras=$request->codigo_barras;
        $Producto->descripcion=$request->descripcion;
        $Producto->costo_compra=$request->costo_compra;
        $Producto->precio_venta=$request->precio_venta;
        $Producto->existencia=$request->existencia;
        $Producto->stock_minimo=$request->stock_minimo;

        $Producto->save();
        

        return redirect ("/productos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=User::find(Auth::id())->categorias;
        $proveedores=User::find(Auth::id())->proveedores;
        $Producto=Producto::findOrFail($id);

        return view("productos.edit", compact("categorias", "proveedores","Producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Producto=Producto::findOrFail($id);

        $this->validate($request,
        ['codigo_barras' => 'required|numeric',
        'descripcion' => 'required',
        'costo_compra' => 'required|between:0,99999999|numeric',
        'precio_venta' => 'required|between:0,99999999|numeric',
        'existencia' => 'required|between:0,99999999|integer',
        'stock_minimo' => 'required|between:0,99999999|integer']);

        if($Producto->codigo_barras != $request->codigo_barras){
            $this->validate($request, ['codigo_barras' => 'unique:productos,codigo_barras']);
        }

        $Producto->update($request->all());

        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Producto=Producto::findOrFail($id);

        $Producto->delete();

        return redirect("/productos");
    }
}
