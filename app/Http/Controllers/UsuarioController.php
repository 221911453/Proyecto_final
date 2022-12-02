<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use App\Models\Usuarios;
use App\Models\Productos;
use App\Models\TipoUsuarios;
use App\Models\DetallePedidos;
use App\Models\Pedidos;
use App\Models\User;


class UsuarioController extends Controller {


    public function validar(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'pass' => 'required|min:8|max:16',
        ]);
        $email = $request->input('email');
        $pass = $request->input('pass');
        //dd($request->all());
        $consulta = Usuarios::where('email', '=', $email)
            ->where('pass', '=', $pass)
            ->get();

            if(count($consulta)==0 or $consulta[0]->activo == '0') {
                    return view('welcome');
            }else{
                $request->session()->put('session_id', $consulta[0]->id);
                $request->session()->put('session_name', $consulta[0]->nombre);
                $request->session()->put('session_app', $consulta[0]->app);
                $request->session()->put('session_tipo', $consulta[0]->id_tipousuario);

                $session_id = $request->session()->get('session_id');
                $session_name = $request->session()->get('session_nombre');
                $session_name = $request->session()->get('session_app');
                $session_tipo = $request->session()->get('session_tipo');
                $user = ['session_id', 'sessio_name'];


                if($session_tipo == 1){
                    return redirect()->route('index', $user); // 1
                }
                else{ return redirect()->route('indexadmin'); // 2
                }
            }
        }

        public function logout(Request $request){
            //-------------- Destrulle las Session
        $request-> session()->forget('session_id');
        $request-> session()->forget('session_name');
        $request-> session()->forget('session_app');
        $request-> session()->forget('session_tipo');
        return view('welcome');
    }


    //----------------registrar nuevo
    public function registrar(){
        return view("registrar");
    }

    public function guardar(Request $request){
        $this->validate($request, [
            'nombre' => 'required|min:4',
            'app' => 'required',
            'apm' => 'required|min:1',
            'fecha' => 'required',
            'direccion' => 'required',
            'telefono1' => 'required',
            'telefono2' => 'required',
            'email' => 'required|email',
            'pass' => 'required',
        ]);

        $usu = User::create(array(
            'nombre'=>$request->input('nombre'),
            'app'=>$request->input('app'),
            'apm'=>$request->input('apm'),
            'fecha'=>$request->input('fecha'),
            'direccion'=>$request->input('direccion'),
            'telefono1'=>$request->input('telefono1'),
            'telefono2'=>$request->input('telefono2'),
            'email'=>$request->input('email'),
            'pass'=>$request->input('pass'),


        ));

        return redirect()->route('welcome');
    }


    //----------------registrar nuevo----------------------------------------------------
    public function login(Request $request){
        if(!Auth::attempt($request->only('email', 'pass'))){
           $result = [
            'user' => null,
            'access_token' => null,
            'token_type' => null,
            'message' => 'usuario incorrecto',
            'success' => false,
            'status' => 200
           ];
           return response()->json([
             'result' => [$result],
           ], 200);

        }else{

         $user = User::where('email', $request['email'])->firstOrFail();
         $token = $user->createToken('auth_token')->plainTextToken;
         $result = [
            'user' => $user,
            'access_token' => $token,
            'token_type' => 'Bearer',
            'message' => 'Has iniciado sesion',
            'success' => true,
            'status' => 200
         ];
         return response()->json([
            'result' => [$result],
           ], 200);
        }
     }



}
