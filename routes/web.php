<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Systemcontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UsuarioController;
use App\Http\Mail\ContactanosMail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::name('welcome')->get('/', function () {
    return view('welcome');
});



Route::name('pago')->get('/pago',[Systemcontroller::class,'pago']);

Route::name('index')->get('/index',[Systemcontroller::class,'index']);
Route::name('about')->get('/about',[Systemcontroller::class,'about']);
Route::name('aboutusuario')->get('/aboutusuario',[Systemcontroller::class,'aboutusuario']);

//-----------------------envio de correo
Route::name('contact')->get('/contact',[MailController::class,'contact']);
Route::name('envio')->post('envio/', 'App\Http\Controllers\MailController@envio');


Route::name('contactusuario')->get('/contactusuario',[Systemcontroller::class,'contactusuario']);
///////////-------------Notificacion
Route::get('/notificacion','App\Http\Controllers\Systemcontroller@notificacion')->name('notificacion');

Route::name('checkout')->get('/checkout',[Systemcontroller::class,'checkout']);
Route::get('add-to-cart/{id}', 'App\Http\Controllers\Systemcontroller@addToCart');
Route::name('guardar3')->post('guardar3/', 'App\Http\Controllers\UsuarioController@guardar3');
Route::name('shop')->get('/shop',[Systemcontroller::class,'shop']);
Route::name('payment')->get('/payment',[Systemcontroller::class,'payment']);
Route::name('single')->get('/single',[Systemcontroller::class,'single']);



//----------------------Iniciar sesion---------------------------------
Route::name('login')->get('login/', [UsuarioController::class, 'login']);
Route::name('validar')->post('validar/', 'App\Http\Controllers\UsuarioController@validar');    //
Route::name('logout')->get('logout/', 'App\Http\Controllers\UsuarioController@logout');



// ----------------------rutas administracion



//-------------------------------------------funcion guardar--------------------------------------------------------
//-----------------------------Agregar usuario/nivel administrador------------------------------
Route::name('agregar/agregarusuario')->get('agregarusuario/', 'App\Http\Controllers\AdminController@agregarusuario');
Route::name('guarduarusuario')->post('guarduarusuario/', 'App\Http\Controllers\AdminController@guarduarusuario');
//-----------------------------Agregar producto/nivel administrador------------------------------
Route::name('agregar/agregarproducto')->get('agregarproducto/', 'App\Http\Controllers\AdminController@agregarproducto');
Route::name('guardarproducto')->post('guardarproducto/', 'App\Http\Controllers\AdminController@guardarproducto');
Route::name('registrar')->get('/registrar',[UsuarioController::class,'registrar']);
Route::name('guardar')->post('guardar/', 'App\Http\Controllers\UsuarioController@guardar');
//-------------------------------------------Muestra tabla--------------------------------------------------------
// rutas administracion----------------Productos-------------------------------------------------------
Route::name('admin/tablaproducto')->get('/tablaproducto',[Systemcontroller::class,'mostrar']);
Route::name('detabases')->get('detabases/{id}', [Systemcontroller::class, 'productoadms']);
// rutas administracion----------------Pedidos-------------------------------------------------------
Route::name('admin/tablapedido')->get('/tablapedido',[Systemcontroller::class,'tablapedido']);
Route::name('detabases')->get('detabases/{id}', [Systemcontroller::class, 'pedidoadms']);
// rutas administracion----------------Usuarios-------------------------------------------------------
Route::name('indexadmin')->get('/indexadmin',[Admincontroller::class,'usuarioadms']);
Route::name('detabases')->get('detabases/{id}', [Systemcontroller::class, 'pedidoadms']);

Route::name('admin/usuarios')->get('/usuarios',[Systemcontroller::class,'usuariosmortrar']);



//-----------------------------Editar producto/nivel administrador------------------------------
Route::name('editar/editarproducto')->get('editarproducto/{id}', [AdminController ::class, 'editarproducto']);
Route::name('salvar2')->put('salvar2/{id}', [AdminController::class, 'salvar2']);
//-----------------------------Editar usuario/nivel administrador------------------------------
Route::name('editar/editarusuario')->get('editarusuario/{id}', [AdminController ::class, 'editarusuario']);
Route::name('salvar1')->put('salvar1/{id}', [AdminController::class, 'salvar1']);



//-----------------------------Borrar pedido/nivel administrador------------------------------
Route::name('borrarpedido')->get('borrar4/{id}', [AdminController::class, 'borrar4']);
//-----------------------------Borrar pedido/nivel administrador------------------------------
Route::name('borrarproducto')->get('borrar2/{id}', [AdminController::class, 'borrar2']);
//-----------------------------Borrar pedido/nivel administrador------------------------------
Route::name('borrarusuario')->get('borrar1/{id}', [AdminController::class, 'borrar1']);

//-----------------------------DEtalle del producto
Route::name('detalleproducto')->get('detalleproducto/{id}', [AdminController::class, 'detalleproducto']);

Route::name('detalleusuario')->get('detalleusuario/{id}', [AdminController::class, 'detalleusuario']);

Route::name('detallepedido')->get('detallepedido/{id}', [AdminController::class, 'detallepedido']);


Route::name('blank')->get('/blank',[Systemcontroller::class,'blank']);
/////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::name('usuarios')->get('/usuarios',[Systemcontroller::class,'usuarios']);




/////////////////////productos principal
Route::name('detallepro')->get('detallepro/{id}', [SystemController::class, 'detallepro']);
Route::name('index')->get('/index',[Systemcontroller::class,'principal']);
Route::name('shop')->get('shop',[Systemcontroller::class,'productos']);
Route::name('datos')->get('datos',[Systemcontroller::class,'datos']);
///////////////////////////Excel por criterio
Route::get('/mostrar','App\Http\Controllers\Systemcontroller@mostrar')->name('mostrar');
Route::get('/ver', 'App\Http\Controllers\Systemcontroller@ver');
Route::get('/excel', 'App\Http\Controllers\Systemcontroller@export')->name('excel');
//------------------------------PDF



//------------------------------Carrito
Route::post('/cart-add',    'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart-checkout','App\Http\Controllers\CartController@cart')->name('cart.checkout');

Route::post('/cart-clear',  'App\Http\Controllers\CartController@clear')->name('cart.clear');

Route::post('/cart-removeitem',  'App\Http\Controllers\CartController@removeitem')->name('cart.removeitem');


//------------------------------Paypal

 //
 //Route::name('/paypal/pay')->get('/paypal/pay', 'App\Http\Controllers\PaymentController@payWhithPayPal');

 Route::get('/paypal/pay', 'App\Http\Controllers\PaymentController@payWithPayPal')->name('pay');
 Route::get('/paypal/status', 'App\Http\Controllers\PaymentController@payPalStatus');

///////// implementacion pdf
Route::get('/pdf', 'App\Http\Controllers\CartController@pdf')->name('pdf');

//-----------------------------Agregar pedido/nivel administrador------------------------------
Route::get('/agregarpedido', 'App\Http\Controllers\AdminController@agregarpedido');
Route::name('guardarpedido')->post('guardarpedido/', 'App\Http\Controllers\AdminController@guardarpedido');
Route::name('tablapedidoU')->get('/tablapedidoU',[Systemcontroller::class,'tablapedidoU']);
Route::name('detallepedidoU')->get('detallepedidoU/{id}', [Systemcontroller::class, 'detallepedidoU']);
