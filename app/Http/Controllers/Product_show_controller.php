<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand_model;
use App\Models\Category_model;
use App\Models\Purchase_model;
use App\Models\Prodctname_model;

class Product_show_controller extends Controller
{

    function create(){
        return view('index');
    }

    function ShowFristOrder(){
        $getData=Purchase_model::limit(8)->get();
        //$getData=$user->paginate(10);
       return response()->json($getData);

    // $categoryName=Purchase_model::groupBy('Category')->get();
      /// return view('index',compact(['getData','latest','categoryName']));
    }

    function LatestOderShow(){
        $latest=Purchase_model::orderBy('id','desc')->limit(8)->get();
       return response()->json($latest);
    }

    function LiveSearch_prdouctShow(Request $request){

        if($request->ajax()){

            $data=Purchase_model::where('product_name','like','%'.$request->search_data."%")->orWhere('brand_name', 'like', '%'.$request->search_data.'%')->get();
               return response()->json($data);
        }

    }


}
