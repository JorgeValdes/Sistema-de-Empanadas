<?php

use GuzzleHttp\Client;


Route::get('/','ClienteController@noticias', function() {

    return view('cliente.inicio');
})->name('inicio');


Route::get('/verNoticia{id}', 'ClienteController@verNoticia')->name('verNoticia');

Route::get('/productos','ClienteController@productos');
Route::get('/pedidos','ClienteController@pedidos')->name('pedidos');
Route::post('/guardaPedido','ClienteController@guardaProductosDelModal')->name('guarda.productoM');
Route::post('/guardaPedido2','ClienteController@recibeTipo')->name('guarda.producto2');
Route::get('pedido{id}/destroy',[
		'uses'=>'ClienteController@destroyPedido',
		'as'=>'pedido.destroy'
	]);

//RUTA PARA ACERCA DE NOSOTROS
Route::get('/nosotros','ClienteController@nosotros');
Route::get('/contacto','ClienteController@contacto');
Route::post('/guardaMensaje','ClienteController@guardaMensaje')->name('guarda.mensaje');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// RUTAS DE ADMIN



Route::prefix('admin')->group(function(){
	//INICIO PANEL DEL ADMIN
	Route::get('/',function(){
		return view('admin.app');
	});
	// RUTAS DE NOTICIAS
	Route::resource('noticias','NoticiaController' , ['names' => [
		'index' 	=> 'admin.noticias.index',
		'create' 	=> 'admin.noticias.create',
		'store' 	=> 'admin.noticias.store',
		'destroy' 	=> 'admin.noticias.destroy',
		'show' 		=> 'admin.noticias.show',
		'edit' 		=> 'admin.noticias.edit',
		'update' 	=> 'admin.noticias.update',
	]]);

	// RUTAS DE PRODUCTOS
	Route::resource('productos','ProductoController', ['names' => [
		'index' 	=> 'admin.productos.index',
		'create' 	=> 'admin.productos.create',
		'store' 	=> 'admin.productos.store',
		'destroy' 	=> 'admin.productos.destroy',
		'show' 		=> 'admin.productos.show',
		'edit' 		=> 'admin.productos.edit',
		'update' 	=> 'admin.productos.update',
	]]);

	//RUTAS DE CLIENTE
	Route::resource('clientes','UsuarioController', ['names' => [
		'index' 	=> 'admin.clientes.index',
		'create' 	=> 'admin.clientes.create',
		'store' 	=> 'admin.clientes.store',
		'destroy' 	=> 'admin.clientes.destroy',
		'show' 		=> 'admin.clientes.show',
		'edit' 		=> 'admin.clientes.edit',
		'update' 	=> 'admin.clientes.update',
	]]);

	//RUTAS DE PEDIDOS
	Route::resource('pedidos','PedidoController', ['names' => [
		'index' 	=> 'admin.pedidos.index',
		'create' 	=> 'admin.pedidos.create',
		'store' 	=> 'admin.pedidos.store',
		'destroy' 	=> 'admin.pedidos.destroy',
		'show' 		=> 'admin.pedidos.show',
		'edit' 		=> 'admin.pedidos.edit',
		'update' 	=> 'admin.pedidos.update',
	]]);

	Route::resource('tipoproductos','TipoProductoController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/filtro', 'ClienteController@filtro')->name('cliente.filtro');
//Route::post('/guardaProducto','ClienteController@guardaProducto')->name('guarda.producto');
Route::get('productByType/{id}', 'ClienteController@guardaProducto');
//RUTA PARA ALMACENAR DATOS DEL SEGUNDO MODAL (DIRECCION, FECHA Y HORA)
Route::post('/guardaPedidoFinal','ClienteController@guardaPedidoFinal')->name('guarda.pedidoF');