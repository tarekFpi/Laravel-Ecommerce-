<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use App\Models\Prodctname_model;

class ProdctnameModelController extends Controller
{

    public function index()
    {

        $getname=Prodctname_model::all();
        return response()->json($getname);

    }

    public function create()
    {

       return view('productNameAdd');
    }


    public function store(Request $request)
    {
        if($request->ajax()){
            $getname=new Prodctname_model();
            $getname->product_Name=str_replace(' ','-',$request->product_name);
            $getname->Date=$request->upload_date;
            $getname->save();
            return "Product Name Add SuccessFull...";
        }
    }


    public function Live_Search_productName(Request $request)
    {
        if($request->ajax()){
            $output="";
            $output=Prodctname_model::where('product_Name','like','%'.$request->search_data.'%')->get();
            return response()->json($output);
    }
    }

    public function edit(Request $request)
    {

        if($request->ajax()){
            $find=Prodctname_model::find($request->update_id);
            $find->product_Name=$request->productName;
            $find->save();

          return "product Name Update SuccessFull.. ";
        }
    }


    public function destroy(Request $request)
    {
        if($request->ajax()){
            $find=Prodctname_model::find($request->delete_id);
            $find->delete();
            return "product Name Delete SuccessFull..";
        }
    }
}
