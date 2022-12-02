<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Productos;
use PDF;


class CartController extends Controller
{

    public function cart(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $cartCollection = \Cart::getContent();
        return view('checkout')->with(['cartCollection'=>$cartCollection]);
    }
    }
    public function add(Request $request){

        $producto = Productos::find($request->producto_id);

        Cart::add(
            $producto->id,
            $producto->nombre,
            $producto->costo,
            1,
            
            array("foto"=>$producto->foto)

        );
        return back()->with('success',"$producto->nombre ¡se ha agregado con éxito al carrito!");

    }

    //public function cart(){
//
    //    return view('checkout');
    //}

    public function removeitem(Request $request) {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
        'id' => $request->id,
        ]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }
    public function pdf(Request $request){
        $session_id = $request->session()->get('session_id');

        if($session_id == 0){
            return redirect()->route('welcome'); // 1
        }else{
        $cartCollection = \Cart::getContent();
        $pdf = PDF::loadView('Detalle-pedido', ['cartCollection'=> $cartCollection])
            ->save(storage_path('app/public/'). 'archivo1.pdf');
        return $pdf->download('archivo.pdf');

        }
    }

}