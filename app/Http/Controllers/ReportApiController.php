<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ReportApiController extends Controller
{
    function store(Request $request) {
        if($request->header('User-Agent') != "accasy") 
            return response()->json(['message' => 'Unauthorized']);
        try {
             $data = $request->json()->all();
            if(isset($data['category'])){
               $category = $this->getCategoryFromName($data['category']);
                if(isset($category)) {
                    if(isset($data['sub_category'])) {
                        $subcategory = $category->subcategories->where("name",$data['sub_category'])->first();
                        if(isset($subcategory)) {
                        $report = new \App\Report;
                        $report->coordinates = $data['coordinates'];
                        $report->comment = $data['comment'];
                        $report->report_timestamp = $data['report_timestamp'];
                        $report->phone_number = isset($data['phone_number']) ? $data['phone_number'] : null;
                        $report->photo = isset($data['photo']) ? $data['photo'] : null;
                        $subcategory->reports()->save($report);
                        return response()->json(['message' => 'ok']); //$report->id;
                    }  
                  }      
                }  
            }               
            /*else
            return 'no id';
             \App\Report::create($data)->id;
            return 'ok';*/
        }catch(Illuminate\Database\QueryException $e) {
            return response()->json(['message' => 'error']);
        }
        
        return response()->json(['message' => 'error']);
       
    }
    
    function fetch() {
        $reportsArray = array();
        $categories = \App\Category::all();
        $counter = 0;
        foreach($categories as $category) {
            foreach($category->subcategories as $subcategory) {
                 foreach($subcategory->reports as $report){
                 $reportsArray[$counter++] = ["category" => $category->name, "sub_category" => $subcategory->name, "coordinates" => $report->coordinates, "comment" => $report->comment, "report_timestamp" => $report->report_timestamp, "phone_number" => $report->phone_number, "image" => $report->photo];
                }
            }
        }
       
        return response()->json($reportsArray);
    }
    
    function fetchReportFromCategory(\App\Category $category) {
         $reportsArray = array(); 
         $counter = 0;
        foreach($category->subcategories as $subcategory) {
             foreach($subcategory->reports as $report){
                 $reportsArray[$counter++] = ["category" => $category->name, "sub_category" => $subcategory->name, "coordinates" => $report->coordinates, "comment" => $report->comment, "report_timestamp" => $report->report_timestamp, "phone_number" => $report->phone_number, "image" => $report->photo];
                }
        }
        return response()->json($reportsArray); 
    }
    
    function fetchReportFromSubCategory(\App\SubCategory $subcategory) {
         $reportsArray = array(); 
         $counter = 0;
        foreach($subcategory->reports as $report){
                 $reportsArray[$counter++] = ["category" => $subcategory->category->name, "sub_category" => $subcategory->name, "coordinates" => $report->coordinates, "comment" => $report->comment, "report_timestamp" => $report->report_timestamp, "phone_number" => $report->phone_number,"image" => $report->photo];
                }   
         return response()->json($reportsArray); 
    }
    
    
    
    function getCategoryFromName($name) {
        return $category = \App\Category::where("name", $name)->first();
    }
    
}