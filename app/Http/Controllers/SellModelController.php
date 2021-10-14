<?php

namespace App\Http\Controllers;

use App\Models\Payment_mathodAdd;
use App\Models\Sell_model;
use App\Models\InfromationAdd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use App\Models\VoucherCord_add;
use App\Models\Purchase_model;
use App\Models\Approv_order;
class SellModelController extends Controller
{

    public function index()
    {
         $data=Sell_model::all();
         return response()->json($data);
    }

    public function create()
    {
        return view("SellOrder");
    }


    public function store(Request $request)
    {


      foreach ($request->selected_process as  $getItem) {


   $result = DB::select("select *FROM  userorder_view where id IN('$getItem')");
       foreach ($result  as $Item) {

                 $data=new Sell_model();
                  $data->serial_id= $Item->serial_id;
                  $data->Bill_no= $Item->Bill_Id;
                  $data->productName= $Item->product_name;
                  $data->CategoryName= $Item->product_category;
                  $data->Brand_name= $Item->Brand_name;
                  $data->product_price= $Item->product_price;
                  $data->product_size= $Item->product_size;
                  $data->sell_quntity=  $Item->sell_quantity;
                  $data->sell_discount= $Item->sell_discount;
                  $data->Voucher_Cord=  $request->voucher_cord;
                  $data->Voucher_discound= $request->voucher_discount;
                  $data->UserName=$Item->UserName;
                  $data->phoneNumber=$Item->phoneNumber;
                  $data->RegionName= $Item->RegionName;
                  $data->CityName= $Item->CityName;
                  $data->AreaName=  $Item->AreaName;
                  $data->Order_option= $Item->Order_option;
                  $data->Delivary_free= $Item->Delivary_free;
                  $data->Address= $Item->Address;
                  $data->UserGmail= $Item->UserGmail;
                  $data->product_details=$Item->product_details;
                  $data->Image= $Item->image;
                  $data->OrderDate= $request->order_date;
                  $data->Payment_mathod= $request->payment_mathod;
                  $data->Admin_bkashPhone= $request->admin_bkash;
                  $data->userBkash_phone= $request->user_bkashPhone;
                  $data->transaction_id= $request->transaction_id;
                  $data->Tracking_number=  $request->tracking_number;
                  $data->Order_status="Pending";
                   $data->save();

            }
           // echo "Order Process SuccessFull..";
      }

    }



    public function sell_orderStatus_update(Request $request)
    {

        if($request->ajax()){
          $data= Sell_model::find($request->getId);
          $data->Order_status=$request->getTracking_name;
          $data->save();
          return "Your Status Name Update SuccessFull..";
        }

    }

    public function user_sell_OrderView(Request $request)
    {


          $data= Sell_model::where('id',$request->getId)->get();
          return response()->json($data);

    }

    function show_paymentMathod(Request $request){

        $data= Payment_mathodAdd::all('Mathod_Name');
        return response()->json($data);
    }


    function get_AdminPhone(Request $request){

        $data= Payment_mathodAdd::where('Mathod_Name',$request->number)->pluck('phone');
        return response()->json($data);
    }

    public function edit(Sell_model $sell_model)
    {

    }


    function userInfromation_update(Request $request){

   if($request->ajax()){


      $data= InfromationAdd::find($request->update_id);
    $data->phoneNumber=$request->update_phone;
    $data->save();
    echo "Update SucessFull..";
 }
    }

    public function destroy(Request $request)
    {
     if($request->ajax()){
        $data= Sell_model::find($request->getId);
        $data->delete();

        return "Sell Order Delete SucessFull..";
     }
    }

    function vourcher_code_Match(Request $request){


        if($request->ajax()){
            if((VoucherCord_add::where('Vouecher_cord',$request->voucher_cod)->exists())){


              $status=VoucherCord_add::where('Vouecher_cord',$request->voucher_cod)->value("status");
          //    $discount=VoucherCord_add::where('Vouecher_cord',$request->voucher_cod)->value("Discount");

              if($status<1){

                // $data=VoucherCord_add::where('Vouecher_cord',$request->voucher_cod)->get(["Discount,Vouecher_cord"]);
                // return response()->json($data);
                echo "Voucher Cord Deactivate";
              }

            }else{
                echo "Voucher Cord is Worong";
            }

         }
    }


    function Voucher_Code_match_store(Request $request){

        if($request->ajax()){

            $sell_qunu=0;
            $stock=0;
            $purchase_quan=0;
            $pdName="";
        foreach ($request->selected_process as  $getItem) {

            $result = DB::select("select *FROM  userorder_view where id IN('$getItem')");
            $discount=VoucherCord_add::where('Vouecher_cord',$request->voucher_cod)->value("Discount");
            foreach ($result  as $Item) {

                $data=new Sell_model();
                $data->serial_id= $Item->serial_id;
                $data->Bill_no= $Item->Bill_Id;
                $data->productName= $Item->product_name;
                $data->CategoryName= $Item->product_category;
                $data->Brand_name= $Item->Brand_name;
                $data->product_price= $Item->product_price;
                $data->product_size= $Item->product_size;
                $data->sell_quntity=  $Item->sell_quantity;
                $data->sell_discount= $Item->sell_discount;
                $data->Voucher_Cord= $request->voucher_cod;
                $data->Voucher_discound=$discount;
                $data->UserName=$Item->UserName;
                $data->phoneNumber=$Item->phoneNumber;
                $data->RegionName=$Item->RegionName;
                $data->CityName= $Item->CityName;
                $data->AreaName=  $Item->AreaName;
                $data->Order_option= $Item->Order_option;
                $data->Delivary_free= $Item->Delivary_free;
                $data->Address= $Item->Address;
                $data->UserGmail= $Item->UserGmail;
                $data->product_details=$Item->product_details;
                $data->Image= $Item->image;
                $data->OrderDate= $request->order_date;
                $data->Payment_mathod= $request->payment_mathod;
                $data->Admin_bkashPhone= $request->admin_bkash;
                $data->userBkash_phone= $request->user_bkashPhone;
                $data->transaction_id= $request->transaction_id;
                $data->Tracking_number=  $request->tracking_number;
                $data->Order_status="Pending";
                 $data->save();


               }

               }
    }
}

    function countSell(Request $request){
        $count=Sell_model::where("OrderDate",$request->date)->count();
        return response()->json($count);
      }


      function SellTable_All_OrderShow_count(Request $request){
        $count=Sell_model::where("OrderDate",$request->date)->count();
        return response()->json($count);
      }

      function puchaseOrder_count(Request $request){
        $count=Purchase_model::where("upload_date",$request->date)->count();
        return response()->json($count);
      }

      //
      function ApproveOrder_count(Request $request){
        $count=Approv_order::where("Accept_Date",$request->date)->count();
        return response()->json($count);
      }


      function Cart_orderStock_check(Request $request){

        if($request->ajax()){

        foreach ($request->selected_process as  $getItem) {

            $data = DB::select("select *FROM  userorder_view where id IN('$getItem')");





   $pdName="";

//sell_quantity
       foreach ($data  as $Item) {

        $sell_qunu=0;
        $purchase_quan=0;
        $stockPd=0;
        $order_quantity=0;

        $pdName=$Item->product_name;

        $order_quantity=$Item->sell_quantity;

        $stock = DB::select("select   *from `stock` WHERE  `product_name` = ?",[$pdName]);
        foreach ($stock  as $stock_Item) {



              $purchase_quan=$stock_Item->pur_unit;

               if($stock_Item->sell_quit > 0){
                  $sell_qunu=$stock_Item->sell_quit;
               }


               $stockPd= $purchase_quan - $sell_qunu;
              // echo "Your stock:".$stockPd;

if(($order_quantity >= $stockPd ) && (strcasecmp($stock_Item->product_name, $pdName)==0)){
      echo "Quantity Over :".$pdName."\n";

        }
        }
            }


           }
    }


      }


      function Cancle_orderForm(){
       return view('Cancle_orderShow');
      }

      //Cancle_orderShow
      function Soft_orderShow_All(Request $request){

        $data= Sell_model::onlyTrashed()->get();
         return response()->json($data);
       }

       function SoftDelete_order(Request $request){
        $data= Sell_model::onlyTrashed()->find($request->Id)->forceDelete();

        echo "permantly Order Delete SuccessFull..";
       }


}
