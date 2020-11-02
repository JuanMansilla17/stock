<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Pedido;
use App\Proveedor;
use App\PedidoItem;
use App\User;

class PedidosController extends Controller
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
        return view("pedidos.index");
    }

    public function list(Request $request){
        $pedidos = Pedido::where('user_id', Auth::id())
        ->where('fecha', '>=', $request->input('desde'))
        ->where('fecha', '<=', $request->input('hasta'))
        ->get();

        $user_id = User::find(Auth::id());

        $pedido_items = DB::table('pedido_items')
            ->join('pedidos', 'pedidos.id', '=', 'pedido_items.pedido_id')
            ->join('users', 'users.id', '=', 'pedido_items.user_id')
            ->where('pedido_items.user_id', '=', settype($user_id, 'string'))
            ->where('pedidos.fecha', '>=', $request->input('desde'))
            ->where('pedidos.fecha', '<=', $request->input('hasta'))
            ->select('pedido_items.*')
            ->get();

        return view("pedidos.list", compact("pedidos", "pedido_items"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores=User::find(Auth::id())->proveedores;

        return view("pedidos.create", compact("proveedores"));
    }

    public function select(Request $request){
        $productos = Productos::where('user_id', Auth::id())
        ->where('proveedor_id', $request->input('proveedor'));

        return view("pedidos.select", compact("productos"));
    }

    public function items(Request $request){
        foreach($request->producto as $producto){
            $productos = $productos->addSelect(Producto::where('id_user', Auth::id())->find($producto));
        }

        return view("pedidos.items", compact("productos"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar pedido
        $this->validate($request,
            [
                'fecha' => 'required',
                'costo_total' => 'required',
                'proveedor' => 'required'
            ]
        );
        
        //guardar pedido
        $pedido = new Pedido;

        $pedido->fecha = $request->fecha;
        $pedido->costo_total = $request->costo_total;
        $pedido->proveedor_id = $request->proveedor;
        $pedido->user_id=Auth::id();

        $pedido->save();

        $pedido_id = Pedido::lastest('id')->first();

        $productos = $request->input('productos');
        
        //recorrer cada item
        $posicion = 0;
        foreach($request->productos as $producto){
            //validar cantidad pedido
            $this->validate($request,
                [
                    'cantidades' . $posicion => 'required'
                ]
            );

            //guardar item pedido
            $pedido_item = new PedidoItem;

            $pedido_item->cantidad = $request->cantidades.$posicion;
            $pedido_item->costo = $request->costo;
            $pedido_item->producto_id = $producto;
            $pedido_item->pedido_id = $pedido_id;
            $pedido_item->user_id = Auth::id();

            $pedido_item->save();

            $posicion++;
        }
        
        return redirect ("/pedidos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
