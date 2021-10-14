<?php

namespace App\Http\Controllers;

use App\Models\Cart_order;
use App\Models\Login_model;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Environment\Console;
use App\Models\Purchase_model;
use App\Models\Prodctname_model;

use App\Models\InfromationAdd;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\DB;
//
class Cart_order_user extends Controller
{


    public function index()  {

        return view('userCartOrder_Show');
    }

    public function create(Request $request)
    {
       // if($request->ajax()){

     //  return view('User_cartShow');
    // return redirect()->route('test');

   //return Redirect::route('hello_test');
   // return response()->view('User_cartShow');

   if($request->ajax()){
     $getId= $request->getId;
   $Data=Purchase_model::find($getId);
  // return redirect('Mydata')->with('message','Insert successfully');

   }
    }

 function ButtonClick_cart($id){

  $Data=Purchase_model::find($id);
  return view('User_cartShow',compact('Data'));

    }


    //item click About page show
    function About_page($id){

        //if($request->ajax()){
        $Data=Purchase_model::find('id',$id)->get();

        return view('User_cartShow',compact('Data'));

     // return redirect('mytest')->with('status',"Insert successfully");

   //return redirect()->route('mytest', [$Data]);

    //  return response()->json(['message'=>"User deleted successfully")]);

    // return response()->view('User_cartShow');
      // return redirect()->route('mytest');


  }




    public function redirectToGoogle()
    {
   // return Socialite::driver('google')->redirect();

    }

  function Add_toCart(Request $request){

    // $user = Socialite::driver('google')->user();
    if($request->ajax()){
  if((Login_model::where('Gmail',$request->getuserGmail)->exists()) && (Login_model::where('Com_password',$request->user_pass)->exists())){
///
         $data= new  Cart_order();
        $data->Bill_Id=$request->pd_bill;
        $data->product_name=$request->pdName;
        $data->product_price=$request->sell_price;
        $data->product_category=$request->category_Name;
        $data->product_size=$request->pd_size;
        $data->sell_quantity=$request->quan_tity;
        $data->sell_discount=$request->pd_discount;

        $data->image=$request->image;
        $data->product_details=$request->product_details;
        $data->user_gmail=$request->getuserGmail;
        $data->Brand_name=$request->brand_name;
        $data->Serial_id=$request->Serial_id;
        $data->save();

        echo "Login SuccessFull..";
       $request->session()->put('gmail',$request->getuserGmail);
       }else{
        echo "Login Faild..";
       }
    }
    }

//user Buy now LOgin match with Add To Cart
function BuyLogin_match(Request $request){

    // $user = Socialite::driver('google')->user();
    if($request->ajax()){
  if((Login_model::where('Gmail',$request->userGmail)->exists()) && (Login_model::where('Com_password',$request->user_pass)->exists())){

         $data= new  Cart_order();
        $data->Bill_Id=$request->pd_bill;
        $data->product_name=$request->pdName;
        $data->product_price=$request->sell_price;
        $data->product_category=$request->category_Name;
        $data->product_size=$request->pd_size;
        $data->sell_quantity=$request->quan_tity;
        $data->sell_discount=$request->pd_discount;

        $data->image=$request->image;
        $data->product_details=$request->product_details;
        $data->user_gmail=$request->userGmail;
        $data->Brand_name=$request->brand_name;
        $data->Serial_id=$request->Serial_id;
        $data->save();

        echo "Login SuccessFull..";
      $request->session()->put('gmail',$request->userGmail);
       }else{
        echo "Login Faild..";
       }
    }
    }

    //user Login Exit alrady whith user BuyNow
    function BuyNowAdd_toCart(Request $request){

            if($request->ajax()){

                $data=new  Cart_order();
                 $data->Bill_Id=$request->pd_bill;
                 $data->product_name=$request->pdName;
                 $data->product_price=$request->sell_price;
                 $data->product_category=$request->category_Name;
                 $data->product_size=$request->pd_size;
                 $data->sell_quantity=$request->quan_tity;
                 $data->sell_discount=$request->pd_discount;

                 $data->image=$request->image;
                 $data->product_details=$request->product_details;
                 $data->user_gmail=$request->UserGmail;
                 $data->Brand_name=$request->brand_name;
                 $data->Serial_id=$request->Serial_id;
                 $data->save();
        echo"Your Cart Add SuccessFull..";
       }else{
           echo"Your Cart Add Faild..";
       }

    }

    //user Login  Exit Add To Cart
    public function LoginAddTo_cart(Request $request){
        if($request->ajax()){

                 $data=new  Cart_order();
                  $data->Bill_Id=$request->pd_bill;
                  $data->product_name=$request->pdName;
                  $data->product_price=$request->sell_price;
                  $data->product_category=$request->category_Name;
                  $data->product_size=$request->pd_size;
                  $data->sell_quantity=$request->quan_tity;
                  $data->sell_discount=$request->pd_discount;

                  $data->image=$request->image;
                  $data->product_details=$request->product_details;
                  $data->user_gmail=$request->UserGmail;
                  $data->Brand_name=$request->brand_name;
                  $data->Serial_id=$request->Serial_id;
                  $data->save();
         echo"Your Cart Add SuccessFull..";
        }else{
            echo"Your Cart Add Faild..";
        }
    }



    //user Cart  order show  Login_cartShow_order
   function CartShow_Login(Request $request){

    if($request->ajax()){
       if((Login_model::where('Gmail',$request->userGmail)->exists()) && (Login_model::where('Com_password',$request->password)->exists())){

   echo "Login SuccessFull..";
   $request->session()->put('gmail',$request->userGmail);
   }else{
     echo "Login Faild..";
    }
   }
   }

//Cart order show
function Cart_order_showGmail(Request $request){
    $cart=Cart_order::where('user_gmail',$request->user_gmail)->get();
       return response()->json($cart);
}


//user infromation Add data show get gmail match
  public function UserInformatinShow(Request $request)
{

   $userAddress=InfromationAdd::where('UserGmail',$request->user_gmail)->get();
   return response()->json($userAddress);
}



    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }

///Check out Cart order update decrement button
    public function edit(Request $request)
    {

        if($request->ajax()){
            $find=Cart_order::find($request->pid);
            $find->sell_quantity=$request->count_quantity;
            $find->save();
            echo "Quantity Update SuccessFull...";
        }
    }

///Check out Cart order update increment button
    public function update(Request $request)
    {

        if($request->ajax()){
            $data=Cart_order::find($request->pid);
            $data->sell_quantity=$request->count_quantity;
            $data->save();
            echo "Quantity Update SuccessFull...";
        }
    }

    public function destroy(Request $request)
    {
        if($request->ajax()){
            $data= Cart_order::find($request->update_id);
            $data->delete();

            echo "Cart order Delete SuccessFull..";
         }
    }


    function quantity_incrementStock(Request $request){

   if($request->ajax()){
    $data = DB::select("select   *from `stock` WHERE  `product_name` = ?",[$request->pdName]);

    foreach ($data  as $item) {

        $sell_qunu=0;
        $purchase_quan=0;
        $stockPd=0;

        $purchase_quan=$item->pur_unit;

         if($item->sell_quit > 0){
            $sell_qunu=$item->sell_quit;
         }

       $stockPd= $purchase_quan-$sell_qunu;

   /*   if( $order_qu > $stockPd ){
      echo "Your Quantity Over Stock not available";

    } */
  }

  return  $stockPd;

   }
    }


    function count_Cart_Order(Request $request){
        $count=Cart_order::where('user_gmail',$request->user_Gmail)->count();

        echo $count;
    }

}
