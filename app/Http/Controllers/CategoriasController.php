<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Categoria;
use App\User;

use App\Producto;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Valida que el usuario esté logeado
    public function __construct()
    {
        $this->middleware('auth');
    }
     /* MUESTRA LA INFORMACION DE LA BASE DE DATOS*/
    public function index()
    {
        $categorias=User::find(Auth::id())->categorias;
        
        return view ("categorias.index",compact("categorias"));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categorias.create"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['descripcion'=>'required']);

        $Categoria= new Categoria;
       
        $Categoria->descripcion=$request->descripcion;
        $Categoria->user_id=Auth::id();

        $Categoria->save();

        return redirect("/categorias");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria=Categoria::findOrFail($id);

        return view ("categorias.show", compact ("categoria"));
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=Categoria::findOrFail($id);
        $hijos = Producto::where('categoria_id', $id)->count();

        return view("categorias.edit", compact("categoria", "hijos"));
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
        $this->validate($request, ['descripcion'=>'required']);

        $categoria=Categoria::findOrFail($id);

        $categoria->update($request->all());

        return redirect("/categorias");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=Categoria::findOrFail($id);

        $categoria->delete();

        return redirect("/categorias");
    }
}
