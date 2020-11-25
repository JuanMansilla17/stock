<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

use App\Proveedor;
use App\User;
use App\Producto;

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
        $proveedores=User::find(Auth::id())->proveedores;
        
        return view ("proveedores.index",compact("proveedores"));
    }
    
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("proveedores.create"); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['razon_social'=>['bail','required','regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/']]);
        $this->validate($request, ['telefono'=>['bail','required','numeric','unique:proveedores']]);
        $this->validate($request, ['mail'=>['bail','required','email','unique:proveedores']]);

        $Proveedor= new Proveedor;
        
        $Proveedor->razon_social=$request->razon_social;
        $Proveedor->telefono=$request->telefono;
        $Proveedor->mail=$request->mail;
        $Proveedor->user_id=Auth::id();

        $Proveedor->save();

        return redirect("/proveedores");
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
        $proveedor = Proveedor::findOrFail($id);
        $hijos = Producto::where('proveedor_id', $id)->count();

        return view("proveedores.edit", compact("proveedor", "hijos"));
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
        $proveedor=Proveedor::findOrFail($id);

        $this->validate($request, ['razon_social'=>['bail','required','regex:/^([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-])+((\s*)+([0-9a-zA-ZñÑáéíóúÁÉÍÓÚ_-]*)*)+$/']]);
        $this->validate($request, ['telefono'=>['bail','required','numeric']]);
        $this->validate($request, ['mail'=>['bail','required','email']]);

        if($proveedor->telefono != $request->telefono){
            $this->validate($request, ['telefono'=>'unique:proveedores']);
        }
        if($proveedor->mail != $request->mail){
            $this->validate($request, ['mail'=>'unique:proveedores']);
        }

        $proveedor->update($request->all());

        return redirect("/proveedores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //$hijos = Producto::where('proveedor_id', $id)->count();

        $proveedor=Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect("/proveedores");
    }
}
