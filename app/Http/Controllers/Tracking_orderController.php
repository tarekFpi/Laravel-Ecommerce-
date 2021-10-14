<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell_model;
use Illuminate\Support\Facades\Redirect;
class Tracking_orderController extends Controller
{

    function create(Request $request){
   $getData= Sell_model::where('UserGmail',$request->user_gmail)->where('Tracking_number',$request->tracking_number)->get();

   return response()->json($getData);

    }

    function index(Request $request){

      if($request->ajax()){

   if((Sell_model::where('UserGmail',$request->userGmail)->exists()) && (Sell_model::where('Tracking_number',$request->tracking_number)->exists())){
   echo "Your_Tracking_Code_validad..";

    }else{
          echo "Your Tracking Code Invalidad";
         }
        }
    }


    function Show_page($userGmail,$tracking_number){
   $getData= Sell_model::where('UserGmail',$userGmail)->where('Tracking_number',$tracking_number)->get();

    return view("Tracking_OrderShow",compact('getData'));


    }


}
