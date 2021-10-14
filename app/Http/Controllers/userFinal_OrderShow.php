<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VoucherCord_add;
use App\Models\Sell_model;
use Carbon\Carbon;
use \Datetime;
class userFinal_OrderShow extends Controller
{
     function index(Request $request){
        $data= Sell_model::where('UserGmail',$request->user_Gmail)->get();
        return response()->json($data);
     }

     function create(){
      return view("userFinal_orderShow");
     }

     function getTracking(Request $request){
        $getTracking= Sell_model::where('UserGmail',$request->user_Gmail)->groupBy('Tracking_number')->get('Tracking_number');
        return response()->json($getTracking);
     }

   function Order_Cancle(Request $request){

    //$hourlyOrders = Order::where('created_at', '>', Carbon::now()->subDays(1))->count();
     $getDate=Sell_model::where('id',$request->get_id)->value('OrderDate');

    $origin = date_create($getDate);
    $target = date_create($request->date);
  $interval = date_diff($origin, $target);
  $count_hour= $interval->format('%a');

    if($count_hour<=1){

        $find=Sell_model::find($request->get_id);
        $find->delete();
        return "Your Order Cancle SuccessFull..";
    }else{
        return "Your order cancel  Faild";
    }

   }


     function store(Request $request){

     }



 
}
