<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//este conotrolador trabaja con el odelo de categoria 
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        return response()->json(Category::all(),200);
    }

    public function getCategoryId($id){
        $categoria=Category::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje','Registro no encontrado'],200);
        }
        return response()->json(Category::find($id), 200);
    }

    public function insertCategory(Request $request){   /// 
        $categoria = Category:: create($request->all());  /// se almacena en esta variable
        return response($categoria,200);// 200 es ok, 500 error servidor , 400 error cliente , 100 error
    }

    //Acrualizar una categoria
    public function updateCategory(Request $request, $id) {
        $categoria = Category::find($id);
        if(is_null($categoria)){
        return response () ->json(['Mensaje: ','Registro no encontrado '], 200);
    }
    $categoria ->update($request->all());
    return response($categoria,200);

}
    //Eliminar una categoria
    public function deleteCategory($id){
        $categoria =Category::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje:', 'Mensaje no encontardo'],200);
            }

            $categoria -> delete();
            return response() ->json(['Mensaje', 'Registro elminado con exito'], 200);
    }



}
