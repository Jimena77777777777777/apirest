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
}
