<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment_mathodAdd;
class PaymentMathodAddController extends Controller
{

    function index(){
      $data= Payment_mathodAdd::all();
    return response()->json($data);
    }

    function Crate(){
       return view("PaymentMathodAdd");
    }

  function store(Request $request){

     if($request->ajax()){


        $file= $request->file('fileToUpload');
        $destinationPath = 'PaymentImage/';

        $image_name=  $request->file('fileToUpload')->getClientOriginalName();

        $imag_url=$destinationPath.$image_name;

      $file->move(public_path('/PaymentImage'),$file->getClientOriginalName());

        $data=new Payment_mathodAdd();
        $data->Mathod_Name=$request->mathod_name;
        $data->phone=$request->phoneNumber;
        $data->image=$imag_url;
        $data->Date=$request->upload_date;
        $data->save();
        return"Payment Mathod Add SuccessFull..";
     }

  }

  function Edit(Request $request){

    if($request->ajax()){
        $find=Payment_mathodAdd::find($request->id);
        $find->phone=$request->phone_number;
        $find->save();
      return "Update Phone Number";
    }
 }

 function LiveSearch_paymentMathod(Request $request){

    if($request->ajax()){
        $output="";
        $output=Payment_mathodAdd::where('Mathod_Name','like','%'.$request->search_data.'%')->orWhere('phone','like','%'.$request->search_data.'%')->get();
        return response()->json($output);
}

 }

 public function destroy(Request $request){

    if($request->ajax()){
        $find=Payment_mathodAdd::find($request->delete_id);

        $image_url= $find->image;
        unlink($image_url);
        $find->delete();
      return "Delete Payment Mathod";
    }

 }
}
