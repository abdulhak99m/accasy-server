<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = \App\SubCategory::all();
        return view('home.index',compact('subcategories'));
    }
    
   /* 
    public function map() {
        return view('home.map');
    }*/
    
    public function map(\App\SubCategory $subcategory) {
        if(!isset($subcategory->id))
             return view('home.map');
        return view('home.map',['endpoint' => "sid/".$subcategory->id]); //$subcategory;
    }
}
