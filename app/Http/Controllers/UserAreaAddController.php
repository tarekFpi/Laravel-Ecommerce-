<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserArea_add;
class UserAreaAddController extends Controller
{

    public function index()
    {
         $data=UserArea_add::all();
       return  response()->json($data);

    }

    public function create()
    {
        return view('UserAreaAdd');
    }

    public function store(Request $request)
    {
         if($request->ajax()){

           $data=new UserArea_add();

           $data->Region_name=$request->region_name;
            $data->City_name=str_replace(' ','-',$request->city_name);
            $data->Area_name=str_replace(' ','-',$request->areaName);
            $data->shipping=$request->shipping;
            $data->save();


        return "User Area Add SucessFull..";
         }
    }




    public function edit(Request $request)
    {

      if($request->ajax()){
        $data=UserArea_add::find($request->delete_id);
       $data->shipping=$request->shipping;
       $data->save();

       return "Shipping Cost Update SuccesFull..";
      }
    }


    public function destroy(Request $request)
    {

        if($request->ajax()){
            $data=UserArea_add::find($request->delete_id);
            $data->delete();

            return "User Area Delete SuccessFull..";
        }
    }

    public function Live_Search_userArea(Request $request)
    {
        if($request->ajax()){
            $output="";
            $output=UserArea_add::where('Region_name','like','%'.$request->search_data.'%')->orWhere('City_name','like','%'.$request->search_data.'%')->get();
            return response()->json($output);
    }
    }
}
