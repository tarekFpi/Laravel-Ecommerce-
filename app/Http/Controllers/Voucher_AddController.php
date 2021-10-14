<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoucherCord_add;
use App\Models\Purchase_model;


class Voucher_AddController extends Controller
{

    function index(){

        $data= VoucherCord_add::all();
        return response()->json($data);
    }

    function create(){
        return view('Voucher_cordAdd');

    }

    function store(Request $request){

   if($request->ajax()){
     $data=new VoucherCord_add();
     $data->Vouecher_cord=$request->vourcher_cord;
     $data->Discount=$request->discount;
     $data->Current_date=$request->upload_date;
     $data->status=$request->status_cord;

     $data->save();

     echo "Vourcher Cord Add SuccessFull..";
   }


    }

    function Voucher_code_Deactivate(Request $request){
        if($request->ajax()){
            $data= VoucherCord_add::find($request->serial_id);
            $data->status=$request->status_code;

            $data->save();

            echo "Vourcher Cord Deactivate..";
          }
    }

    function Voucher_code_Activate(Request $request){

        if($request->ajax()){
            $data= VoucherCord_add::find($request->serial_id);
            $data->status=$request->status_code;
            $data->save();

            echo "Vourcher Cord Activate..";
          }
    }

    function getProduct_Name(){

        $productName= Purchase_model::groupBy('product_name')->get('product_name');
        return response()->json($productName);
    }

    function getProduct_price(Request $request){

        $product_price= Purchase_model::where('product_name',$request->Name)->get('sell_price','image');
        return response()->json($product_price);
    }

    function getProduct_Imgae(Request $request){

        $product_image= Purchase_model::where('product_name',$request->Name)->where('sell_price',$request->price)->get(['image','sell_discount']);
        return response()->json($product_image);
    }

    function Edit(Request $request){

        if($request->ajax()){
            $data= VoucherCord_add::find($request->update_id);
            $data->Vouecher_cord=$request->voucher_code;
            $data->Discount=$request->discount;
            $data->save();

            echo "Vourcher Cord Update SuccessFull..";
          }
    }



    function live_Search(Request $request){
        // `Vouecher_cord` `Current_date`
        if($request->ajax()){

            $output=VoucherCord_add::where('Vouecher_cord','like','%'.$request->search_data.'%')->orWhere('Current_date','like','%'.$request->search_data.'%')->get();
            return response()->json($output);
    }
    }

    function destroy(Request $request){
        if($request->ajax()){
            $data= VoucherCord_add::find($request->delete_id);
            $data->delete();

            echo "Vourcher Cord Delete SuccessFull..";
          }
    }

}
