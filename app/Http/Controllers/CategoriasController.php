<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /* MUESTRA LA INFORMACION DE LA BASE DE DATOS*/
    public function index()
    {
        $categorias=Categoria:: all();
        
        return view ("categorias.index",compact("categorias"));
    }
    
    public function categorias()
    {
      
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
        $Categoria= new Categoria;

       
        $Categoria->descripcion=$request->descripcion;
        $Categoria->user_id=$request->user_id;

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

        return view("categorias.edit", compact("categoria"));
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
