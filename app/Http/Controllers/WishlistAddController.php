<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchase_model;
use App\Models\Login_model;
use App\Models\Cart_order;
use App\Models\Wishlist_Add;
class WishlistAddController extends Controller
{

   function index(){
       $data=Wishlist_Add::all();
       return response()->json($data);
   }

   function create(){
     return view('Wishlist_OrderShow');
   }

    function WishList_Login(Request $request){

        if($request->ajax()){
      if((Login_model::where('Gmail',$request->userGmail)->exists()) && (Login_model::where('Com_password',$request->user_password)->exists())){

            echo "Login SuccessFull..";
           $request->session()->put('gmail',$request->userGmail);
           }else{
            echo "Login Faild..";
           }
        }
        }

        function WishListAdd(Request $request){

            if($request->ajax()){
                 $data= new  Wishlist_Add();

                $data->Bill_Id=$request->pd_bill;
                $data->product_name=$request->pdName;
                $data->product_price=$request->sell_price;
                $data->product_category=$request->category_Name;
                $data->product_size=$request->pd_size;
                $data->sell_quantity=$request->quan_tity;
                $data->sell_discount=$request->pd_discount;

                $data->image=$request->image;
                $data->product_details=$request->product_details;
                $data->user_gmail=$request->user_gmail;
                $data->Brand_name=$request->brand_name;
                $data->Serial_id=$request->Serial_id;
                $data->save();

                return "Wishlist Add SuccessFull..";
                $request->session()->put('gmail',$request->user_gmail);
               }else{
                return "Wishlist Add Faild..";
               }

            }


            function WishList_sendOrderAdd_taCart(Request $request){


                if($request->ajax()){
                      $getData= Wishlist_Add::where('serial_id',$request->pd_id)->get();

                 foreach($getData as $value){
                    $data=new Cart_order();

                    $data->Bill_Id=$value->Bill_Id;
                    $data->product_name=$value->product_name;
                    $data->product_price=$value->product_price;
                    $data->product_category=$value->product_category;
                    $data->product_size=$value->product_size;
                    $data->sell_quantity=$value->sell_quantity;
                    $data->sell_discount=$value->sell_discount;

                    $data->image=$value->image;
                    $data->product_details=$value->product_details;
                    $data->user_gmail=$value->user_gmail;
                    $data->Brand_name=$value->Brand_name;
                    $data->Serial_id=$value->Serial_id;
                    $data->save();

                    return "Wishlist Order Add To Cart SuccessFull..";
                }
                   }else{
                    return "Wishlist Order Add To Cart Faild";
                   }

                }

                function destroy(Request $request){
                    if($request->ajax()){
                    $flight=Wishlist_Add::find($request->pd_id);
                    $flight->delete();
                    return "Wishlist Order Delete SuccessFull..";
                    }
                }

                function count_wishlist_Order(Request $request){
                    $count=Wishlist_Add::where('user_gmail',$request->user_Gmail)->count();

                    echo $count;
                }



}
