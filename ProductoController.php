<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
public function getProducto(){
    return response()->json(producto::all(),200);
}

public function insertProducto(Request $request){
    $descripcion = producto::create($request->all());
    return response($descripcion,200);
}

public function upProducto(Request $request, $id){
    $producto = producto::find($id);
    $producto->update($request->all());
    return response($producto,200);
} 

/*public function delProducto($id){
    $descripcion= producto::find($id);
    $descripcion= delete();
    return response()->json(['Mensaje'=>'Se elimino'],200);
}*/

}

