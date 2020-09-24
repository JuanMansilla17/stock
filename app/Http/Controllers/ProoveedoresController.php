<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Categoria;
use App\User;

class ProveedoresController extends Controller
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
        $proveedor=User::find(Auth::id())->proveedor;
        
        return view ("proveedor.index",compact("proveedor"));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("proveedor.create"); 
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

        $Proveedor= new Proveedor;
       
        Proveedor->razon_social=$request->razon_social;
        Proveedor->telefono=$request->telefono;
        Proveedor->mail=$request->mail;
        Proveedor->user_id=Auth::id();

        $Proveedor->save();

        return redirect("/proveedor");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor=Proveedor::findOrFail($id);

        return view ("proveedor.show", compact ("proveedor"));
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        proveedor=Proveedor::findOrFail($id);

        return view("proveedor.edit", compact("proveedor"));
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
        $this->validate($request, ['razon_social'=>'required']);
        $this->validate($request, ['telefono'=>'required']);
        $this->validate($request, ['mail'=>'required']);

        $proveedor=Proveedor::findOrFail($id);

        $proveedor->update($request->all());

        return redirect("/proveedor");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor=Proveedor::findOrFail($id);

        $proveedor->delete();

        return redirect("/proveedor");
    }
}
