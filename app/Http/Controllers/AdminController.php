<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Usuarios;
use App\Models\Productos;

use App\Models\TipoUsuarios;
use App\Models\DetallePedidos;
use App\Models\Pedidos;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\Apicontext;

use Auth;

class AdminController extends Controller {
    //----------------------------------------------------------------------tabla usuario-----------------------
    public function usuarioadms(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
            $session_tipo = $request->session()->get('session_tipo');
            if($session_tipo == 2){
        $usuarioadms = DB::table('tb_usuarios')
        ->join('tb_tipousuarios', 'tb_usuarios.id_tipousuario', '=', 'tb_tipousuarios.id')
        ->select('tb_tipousuarios.nombre as tipousuario', 'tb_usuarios.*')
        ->get();
        //dd($usuarioadms->all());
         return view("admin/indexadmin")
         ->with(['usuarioadms' => $usuarioadms]);
            }else{
                return redirect()->route('index'); // 1
            }
        }
}

//-----------------------------------------------------------------Agregar usuario-----------------
public function agregarusuario (Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $tipousuario = Tipousuarios::all();
    return view("agregar/agregarusuario")
        ->with(['tipousuario' => $tipousuario]);
        }
}
public function guarduarusuario(Request $request){
    $this->validate($request, [
        'nombre'=>'required|min:4',
        'app'=>'required',
        'apm'=>'required',
        'fecha'=>'required|date',
        'direccion'=>'required|{200}',
        'telefono1'=>'required|{max:14}',
        'telefono2'=>'required|{max:14}',
        'email'=>'required|email',
        'pass'=>'required',
        'id_tipousuario'=>'required'
    ]);

    $usu = Usuarios::create(array(
        'nombre'=>$request->input('nombre'),
        'app'=>$request->input('app'),
        'apm'=>$request->input('apm'),
        'fecha'=>$request->input('fecha'),
        'direccion'=>$request->input('direccion'),
        'telefono1'=>$request->input('telefono1'),
        'telefono2'=>$request->input('telefono2'),
        'email'=>$request->input('email'),
        'pass'=>$request->input('pass'),
        'id_tipousuario'=>$request->input('id_tipousuario')
    ));

    return redirect()->route('indexadmin');
}



    //----------------Editar usuario/nivel administrador-----------------

    public function editarusuario (Usuarios $id, Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $usu = Usuarios::find($id);
        $usuarios = Tipousuarios::all();

         return view("editar/editarusuario")
        ->with(['usu' =>$id])
        ->with(['usuarios' => $usuarios]);
        }
    }

    public function salvar1 (Usuarios $id, Request $request){
        $this->validate($request, [
            'nombre'=>'required|min:4',
            'app'=>'required',
            'apm'=>'required',
            'fecha'=>'required|date',
            'direccion'=>'required',
            'telefono1'=>'required|max:14',
            'telefono2'=>'required|max:14',
            'email'=>'required|email',
            'pass'=>'required',
            'id_tipousuario'=>'required'
        ]);
        $query = Usuarios::find($id->id);
             $query->nombre = $request->nombre;
             $query->app = $request->app;
             $query->apm= $request->apm;
             $query->direccion= $request->direccion;
             $query->telefono1= $request->telefono1;
             $query->telefono2= $request->telefono2;
             $query->email= $request->email;
             $query->pass= $request->pass;
             $query->id_tipousuario = $request-> id_tipousuario;

        $query->save();

        return redirect()->route("indexadmin", ['id' =>$id->id]);

    }

//------------------------------------------------------------------------------------------------------------------
//----------------Agregar productos /nivel administrador-----------------
     public function agregarproducto(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        return view("agregar/agregarproducto");
        }
    }
    public function guardarproducto(Request $request){
        $this->validate($request, [
            'nombre' => 'required|min:10',
            'foto' => 'required',
            'descripcion' => 'required|min:75',
            'costo' => 'required',
            'color' => 'required',
            'medida' => 'required',
            'material' => 'required',
        ]);
        if($request->file('foto') != ''){
            //-------------------Foto/Archivo--------------
            $file = $request->file('foto');

            $foto = $file->getClientOriginalName();
            //$foto = $request->$file->getClientOriginalName();

            $date =date('Ymd_His_');
                  $foto2 = $date . $foto;

            \Storage::disk('local')->put($foto2, \File::get($file));
        }
        else{
            $foto2 = "shadow.png";

    }
        $productoadm = Productos::create(array(

            'nombre'=>$request->input('nombre'),
            'foto'=>$foto2,
            'descripcion'=>$request->input('descripcion'),
            'costo'=>$request->input('costo'),
            'color'=>$request->input('color'),
            'medida'=>$request->input('medida'),
            'material'=>$request->input('material'),

        ));

        return redirect()->route('admin/tablaproducto');
    }
    
    //----------------Editar producto/nivel administrador-----------------

    public function editarproducto (Productos $id, Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $produc = Productos::find($id);
         return view("editar/editarproducto")
        ->with(['produc' =>$id]);
    }
}

    public function salvar2 (Productos $id, Request $request){
        $this->validate($request, [
            'nombre' => 'required|min:10',
            'foto1' => 'required|file',
            'descripcion' => 'required|max:75|min:20',
            'costo' => 'required',
            'color' => 'required',
            'medida' => 'required',
            'material' => 'required',
        ]);

        if($request->file('foto1') != ''){
            //-------------------Foto/Archivo--------------
            $file = $request->file('foto1');

            $foto = $file->getClientOriginalName();
            //$foto = $request->$file->getClientOriginalName();

            $date = date('Ymd_His_');
                  $foto2 = $date . $foto;

            \Storage::disk('local')->put($foto2, \File::get($file));
        }
        else{
            $foto2 =$request->$foto2;
        }
        // $id->update($request->only('matricula','nombre','fn','gen','direccion','email','pass','foto','id_grupo'));

        $query = Productos::find($id->id);
             $query->nombre = $request->nombre;
             $query->foto =  $foto2;
             $query->descripcion = $request->descripcion;
             $query->costo = $request->costo;
             $query->color = $request->color;
             $query->medida = $request->medida;
             $query->material = $request->material;

        $query->save();

        return redirect()->route("admin/tablaproducto", ['id' =>$id->id]);

    }



//-------------------------------------------------------------------------------------------------------------

//----------------------Borrar pedido delete
public function borrar1(Usuarios $id, Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $id->delete();
    return redirect()->route("indexadmin");
}
}
    //----------------------Borrar producto delete
public function borrar2(Productos $id, Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $id->delete();
    return redirect()->route("admin/tablaproducto");
        }
    }

//----------------------Borrar pedido delete
public function borrar4(Pedidos $id, Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $id->delete();
    return redirect()->route("admin/tablapedido");
        }
}
//-------------------------------------Detalle del producto
public function detalleproducto($id){
    $productos=DB::table('tb_productos')
        ->select('id','nombre','foto', 'descripcion','costo','color','medida','material', 'created_at')
        ->where('id', '=', $id)
        ->get();
    
    return view("detalle/detalleproducto")
        ->with(['productos' => $productos]);
}
//-------------------------------------Detalle del usuario
public function detalleusuario($id, Request $request){
    $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
    $usuarios = DB::table('tb_usuarios')
    ->join('tb_tipousuarios', 'tb_usuarios.id_tipousuario', '=', 'tb_tipousuarios.id')
    ->select('tb_tipousuarios.nombre as tipousuario', 'tb_usuarios.*')
    ->where('tb_usuarios.id', '=', $id)
    ->get();
    return view("detalle/detalleusuario")
        ->with(['usuarios' => $usuarios]);
        }
}
//-------------------------------------Detalle del pedido
public function detallepedido($id, Request $request){
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
    return view("detalle/detallepedido")
        ->with(['pedidos' => $pedidos]);
        }
}
//----------------Agregar productos /nivel administrador-----------------
public function agregarpedido(){
    return view("agregar/agregarproducto");
    }
public function guardarpedido(Request $request){
    
    $productoadm = Pedidos::create(array(
        'id_usuario'=>session('session_id')
    ));
    if($productoadm){
        $pedido_id = $productoadm->id;
        $productoadm = DetallePedidos::create(array(
            'id_producto'=>$request->input('id_producto'),
            'id_pedido'=>$pedido_id,
            'cantidad'=>$request->input('cantidad'),
            'total'=>$request->input('total'),
        ));
        return redirect()->route('pay');
    }
}
}
