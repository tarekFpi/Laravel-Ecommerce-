<?php

namespace App\Http\Controllers;
use App\Models\Sell_model;
use App\Models\Approv_order;
use Illuminate\Http\Request;

class ApprovOrderController extends Controller
{
   function index(){
    $getData=Approv_order::all();
   return response()->json($getData);
   }

   function Create(){

      return view("Approv_orderShow");
}

function Approve_OrderAdd(Request $request){


    if($request->ajax()){

         $result=Sell_model::where('id',$request->getId)->get();

        foreach ($result  as $Item) {
          $data= new Approv_order();

         $data->serial_id= $Item->serial_id;
        $data->Bill_no= $Item->Bill_no;
        $data->productName= $Item->productName;
        $data->CategoryName= $Item->CategoryName;
        $data->Brand_name= $Item->Brand_name;
        $data->product_price= $Item->product_price;
        $data->product_size= $Item->product_size;
        $data->sell_quntity=  $Item->sell_quntity;
        $data->sell_discount= $Item->sell_discount;
        $data->Voucher_Cord=  $Item->Voucher_Cord;
        $data->Voucher_discound= $Item->Voucher_discound;
        $data->UserName= $Item->UserName;
        $data->phoneNumber= $Item->phoneNumber;
        $data->RegionName= $Item->RegionName;
        $data->CityName= $Item->CityName;
        $data->AreaName=  $Item->AreaName;
        $data->Order_option= $Item->Order_option;
        $data->Delivary_free= $Item->Delivary_free;
        $data->Address= $Item->Address;
        $data->UserGmail= $Item->UserGmail;
        $data->product_details= $Item->product_details;
        $data->Image= $Item->Image;
        $data->OrderDate= $Item->OrderDate;
        $data->Payment_mathod= $Item->Payment_mathod;
        $data->Admin_bkashPhone= $Item->Admin_bkashPhone;
        $data->transaction_id= $Item->transaction_id;
        $data->userBkash_phone= $Item->userBkash_phone;
        $data->Tracking_number= $Item->Tracking_number;
        $data->Accept_Date= $request->currnent_date;
        $data->Order_status= $Item->Order_status;
         $data->save();

  echo "Order Approv  SuccessFull..";
}
  }


}


public function user_Approv_OrderView(Request $request)
{

      $data= Approv_order::where('id',$request->getId)->get();
      return response()->json($data);

}

public function destroy(Request $request)
{
 if($request->ajax()){
    $data= Approv_order::find($request->getId);
    $data->delete();
    return "Approv Order Delete SucessFull..";
 }
}

function Approv_total_count(Request $request){

    $data= Approv_order::where('Accept_Date',$request->date)->get();
    return response()->json($data);
}

}
