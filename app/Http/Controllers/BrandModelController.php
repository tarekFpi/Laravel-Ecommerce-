<?php

namespace App\Http\Controllers;

use App\Models\Brand_model;
use Illuminate\Http\Request;

class BrandModelController extends Controller
{

    function index(){
        $getAll=Brand_model::all();

        return  response()->json($getAll);
    }

    function Create(){
        return view('BrandNameAdd');
    }

    function store(Request $request){

       if($request->ajax()){
           $brand=new Brand_model();
           $brand->Brand_name=str_replace(' ','-',$request->brand_name);
           $brand->Date=$request->upload_date;

           $brand->save();
           return "Data insert SuccessFull..";
       }
    }

    function edit(Request $request){

        if($request->ajax()){
            $data=Brand_model::find($request->update_id);
            $data->Brand_name=$request->brand_name;
            $data->save();

            return "Brand Name Update SuccessFull..";
        }
    }

    function delete(Request $request){
        $data=Brand_model::find($request->delete_id);
        $data->delete();
        return"Brand Name Delete SuccessFull..";
    }
}
