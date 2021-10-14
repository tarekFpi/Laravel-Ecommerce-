<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StockController extends Controller
{

    function create(){

        return view('Stock_product');
    }

      function Stock(){
        $result =DB::select("select *FROM  stock ");
        return response()->json($result);

      }

      function Live_stockProductShow(Request $request){

        if($request->ajax()){
            $output="";
            $output=DB::select("select *FROM  stock where Category LIKE '%$request->search_data%' OR brand_name LIKE '%$request->search_data%' OR product_name LIKE '%$request->search_data%' OR bill_number LIKE '%$request->search_data%'");
            return response()->json($output);
    }
      }

}
