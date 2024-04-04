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


}
