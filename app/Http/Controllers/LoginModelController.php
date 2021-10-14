<?php

namespace App\Http\Controllers;

use App\Models\Login_model;
use Illuminate\Http\Request;

class LoginModelController extends Controller
{

  function singUp(Request $request){

   if($request->ajax()){

    $data=new Login_model();
    $data->UserName= $request->user_Name;
    $data->Gmail= $request->user_gmail;
    $data->password= $request->user_Name;
    $data->Com_password= $request->conf_pass;
    $data->phone= $request->phone;

 $data->save();
 echo"SingUp SuccessFull..";

    }
  }

  function Logout(Request $request){

    if(session()->has("gmail")){
        $request->session()->pull('gmail');
    }
}


  function test(Request $request){
   echo session()->get('gmail','Not Found');
  }
}
