<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function store(Request $request) {
        try {
             $data = $request->json();
             \App\Category::create($data->all())->id;
            return 'ok';
        }catch(Illuminate\Database\QueryException $e) {
            return 'error';
        }
       
    }
    
    function fetch() {
        return response()->json(\App\Category::all());
    }
}
