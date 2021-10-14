<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfitController extends Controller
{
     function create(){
         return view('profit_product');
     }

     function profit(){
        $result =DB::select("select *FROM  profit ");
        return response()->json($result);
    }

    function LiveSearch_profit_produt(Request $request){

        if($request->ajax()){
            $output="";
            $output=DB::select("select *FROM  profit where Category LIKE '%$request->search_data%' OR brand_name LIKE '%$request->search_data%' OR product_name LIKE '%$request->search_data%'");
            return response()->json($output);
    }
}
}
