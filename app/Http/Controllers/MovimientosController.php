<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Producto;
class MovimientosController extends Controller
{
    public function ingreso(){
        
        return view("movimientos.ingreso");
    }

    public function nuevo_ingreso(Request $request){
        $producto = Producto::where('codigo_barras', $request->input('codigo_barras'))->get();
        
        return view("movimientos.nuevo_ingreso", compact("producto"));
    }

    public function actualizar_ingreso(Request $request){
        $producto = Producto::findOrFail($request->input('id'));
        $existencia_actualizada = $producto->existencia + $request->input('cantidad');

        Producto::findOrFail($request->input('id'))->update(['existencia' => $existencia_actualizada]);

        return redirect("/ingreso");
    }

    public function egreso(){
        return view("movimientos.egreso");
    }

    public function nuevo_egreso(Request $request){
        $this->validate($request,
            [
                'codigo_barras' => 'required | numeric | min:1',
                'cantidad' => 'required | numeric | min:1'
            ]);

        $producto = Producto::where('codigo_barras', $request->input('codigo_barras'))->get();
        $cantidad = $request->cantidad;

        if(count($producto) > 0){
            $productoEncontrado = true;
        } else{
            $productoEncontrado = false;
        }

        return view("movimientos.nuevo_egreso", compact("producto","cantidad","productoEncontrado"));
    }

    public function actualizar_egreso(Request $request){
        $producto = Producto::findOrFail($request->input('id'));
        $existencia_actualizada = $producto->existencia - $request->input('cantidad');

        Producto::findOrFail($request->input('id'))->update(['existencia' => $existencia_actualizada]);

        return redirect("/egreso");
    }
}
