<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Exports\ProductosExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Usuarios;
use App\Models\Productos;
use Cart;
use App\Models\TipoUsuarios;
use App\Models\DetallePedidos;
use App\Models\Pedidos;
use App\Notifications\RegistroUsuario;
use Auth;


class Systemcontroller extends Controller{

    public function index(){
        return view('index');
    }

    public function welcome(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }
    public function aboutusuario(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        return view('aboutusuario');
        }
    }

    public function contact(){
        return view('contact');
    }
    public function contactusuario(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        return view('contactusuario');
    }
}
   /* public function checkout(){
        return view('checkout');
    }*/
    public function shop(){
        return view('shop');
    }
    public function payment(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        return view('payment');
        }
    }
    public function single(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        return view('single');
        }
    }

    // -----------------------------Administracion--------------------------------------------

    public function indexadmin(){
        return view('admin/indexadmin');
    }
    public function usuarios(){
        return view('admin/usuarios');
    }

    public function blank(){
        return view('admin/blank');
    }

// -----------------------------mostrar tablas Administracion--------------------------------------------
    public function usus(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $usus = DB::table('tb_usuarios')
        ->join('tb_tipousuarios', 'tb_usuarios.id_tipousuarios', '=', 'tb_tipousuarios.id')
        ->select('tb_tipousuarios.nombre as tipousuarios',  'tb_usuarios.*')
        ->get();
        return view("admin/indexadmin")
        ->with(['usus' => $usus]);
}
    }

    public function usuariosmortrar(){

        return view('admin/usuarios');
    }

//----------------------------------------------------------------------tabla producto-----------------------

public function mostrar( Request $req){
    $session_id = $req->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $crit = $req['criterio'];

    //$cids = DB::table('td_bases')->where('nombre', 'like', "%$crit%");
    $productoadms = DB::select("select * from tb_productos where nombre like '%$crit%'");
    return view('admin/tablaproducto',['productoadms' => $productoadms, 'crit'=>$crit ]);
}
}
public function ver(Request $request) {
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
$productoadms = Productos::all();
return view('admin/tablaproducto',['productoadms' => $productoadms, 'crit'=>'']);
}}
public function export(Request $req){
return Excel::download(new ProductosExport($req->crit), 'productos.xlsx');
}

//----------------------------------------------------------------------tabla producto-----------------------
public function tablapedido(Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $pedidos = DB::table('tb_detallepedidos')
        ->join('tb_pedidos', 'tb_detallepedidos.id_pedido', '=', 'tb_pedidos.id')
        ->join('tb_productos', 'tb_detallepedidos.id_producto', '=', 'tb_productos.id')
        ->join('tb_usuarios', 'tb_pedidos.id_usuario', '=', 'tb_usuarios.id')
        ->select('tb_usuarios.nombre as usuario','tb_productos.nombre as producto',
        'tb_pedidos.id as id_pedido',
        'tb_detallepedidos.*')
         ->orderByDesc('tb_pedidos.id')
        ->get();
        return view("admin/tablapedido")
        ->with(['pedidos' => $pedidos]);

}
}
public function notificacion(Request $request){
    $user = Usuarios::find(3);
    $user->notify(new RegistroUsuario);
    return view('welcome');
    }
public function principal(Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $productos =  Productos::all();
    return view('index',compact('productos'));
        }
}
///////////////////////////////////////detalle del producto area usuario
public function detallepro(Request $request, $id){
    $session_id = $request->session()->get('session_id');
    if($session_id == 0){
        return redirect()->route('welcome'); // 1
        }else{
    $productos=DB::table('tb_productos')
        ->select('id','nombre','foto', 'descripcion','costo','color','medida','material', 'created_at')
        ->where('id', '=', $id)
        ->get();

    return view('single')
        ->with(['productos' => $productos]);
        }
}
//////////////////////////carrito
public function pago(Request $request){
    $session_id = $request->session()->get('session_id');
    if($session_id == 0){
        return redirect()->route('welcome'); // 1
        }else{
    return view('pago');
        }
}

public function checkout(Request $request){
    $session_id = $request->session()->get('session_id');
    if($session_id == 0){
        return redirect()->route('welcome'); // 1
        }else{
    return view('checkout');
        }
}
public function addToCart($id){
    // logica para agregar producto
    $product = Productos::find($id);
    $checkout = session()->get('checkout');
    // if cart is empty then this the first product
    if(!$checkout){
        $checkout = [
            $id => [
                "nombre" => $product->nombre,
                "cantidad" => 1,
                "costo" => $product->costo,
                "foto" => $product->foto
                ]
            ];
            session()->put('checkout', $checkout);
            return redirect()->back()->with('success',"$product->nombre producto agregado");
    }

    if(isset($checkout[$id])){
        $checkout[$id]['cantidad']++;
        session()->put('checkout', $checkout);
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
    $checkout[$id] = [
         "nombre" => $product->nombre,
         "cantidad" => 1,
         "costo" => $product->costo,
         "foto" => $product->foto
    ];
    session()->put('checkout', $checkout);
    return redirect()->back()->with('success', 'Product agregado ');
    }
    public function productos(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $productos =  Productos::all();
    return view('shop',compact('productos'));
    }
}
public function datos(Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $texto=trim($request->get('texto'));
    $productos = DB::table('tb_productos')
    ->select('id','nombre', 'foto', 'descripcion','costo','color','medida','material')
    ->where('nombre','LIKE','%'.$texto.'%')
    ->orWhere('descripcion','LIKE','%'.$texto.'%')
    ->orderBy('nombre','asc')
    ->get();
return view('shop',compact('productos','texto'));
        }
    }
    public function tablapedidoU(Request $request){
        $session_id = $request->session()->get('session_id');

            if($session_id == 0){
                return redirect()->route('welcome'); // 1
            }else{
                Cart::clear();
            $pedidos = DB::table('tb_detallepedidos')
            ->join('tb_pedidos', 'tb_detallepedidos.id_pedido', '=', 'tb_pedidos.id')
            ->join('tb_productos', 'tb_detallepedidos.id_producto', '=', 'tb_productos.id')
            ->join('tb_usuarios', 'tb_pedidos.id_usuario', '=', 'tb_usuarios.id')
            ->select('tb_usuarios.nombre as usuario','tb_productos.nombre as producto',
            'tb_pedidos.id as id_pedido',
            'tb_detallepedidos.*')
            ->where("id_usuario", '=', $session_id)
             ->orderByDesc('tb_pedidos.id')
            ->get();
            return view("tablapedidoU")
            ->with(['pedidos' => $pedidos]);

    }

}
public function detallepedidoU($id, Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $pedidos = DB::table('tb_detallepedidos')
    ->join('tb_pedidos', 'tb_detallepedidos.id_pedido', '=', 'tb_pedidos.id')
        ->join('tb_productos', 'tb_detallepedidos.id_producto', '=', 'tb_productos.id')
        ->join('tb_usuarios', 'tb_pedidos.id_usuario', '=', 'tb_usuarios.id')
        ->select('tb_usuarios.nombre as user','tb_productos.nombre as producto',
        'tb_pedidos.id as id_pedido',
        'tb_detallepedidos.*')
    ->where('tb_pedidos.id', '=', $id)
    ->get();
    return view("detallepedidoU")
        ->with(['pedidos' => $pedidos]);
        }
}
}
