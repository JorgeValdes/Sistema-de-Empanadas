<?php

use Illuminate\Http\Request;
//obtener los productos que tengan la id del tipo de producto seleccionado
Route::get('/tipo/{id}/productos','ProductoController@byTipo');
