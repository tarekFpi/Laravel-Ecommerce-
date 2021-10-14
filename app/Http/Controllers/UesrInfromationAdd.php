<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserArea_add;
use App\Models\InfromationAdd;

class UesrInfromationAdd extends Controller
{

    function getRegionName(){
      $regionName= UserArea_add::groupBy('Region_name')->get();

     return response()->json($regionName);
    }

    function getCityName(Request $request){
  $city_Name= UserArea_add::where('Region_name',$request->region_Name)->groupBy('City_name')->get();

   return response()->json($city_Name);
      }


       function getAreaName(Request $request){

        $area_Name= UserArea_add::where('Region_name',$request->region_name)->
        where('City_name',$request->city_name)->groupBy('Area_name')->get();
       return response()->json($area_Name);

      }


    function getShipping(Request $request){

        $shipping= UserArea_add::where('Region_name',$request->region_Name)->
        where('City_name',$request->cityName)->where('Area_name',$request->areaName)->value('shipping');
        return $shipping;

      }

      function CheckUser_information(Request $request){

        if($request->ajax()){
        if(InfromationAdd::where('UserGmail',$request->user_Gmail)->exists()){
            echo "User_Infromation_Alrady_Add";
       }else{
           echo "Not Match".$request->user_Gmail;
       }
        }

      }



    public function create()
    {
        return view('UserInformationShow');
    }

    public function store(Request $request)
    {

      if($request->ajax()){

              $data= new InfromationAdd();
               $data->UserName= $request->userName;
               $data->phoneNumber= $request->phone;
               $data->RegionName= $request->region_Name;
               $data->CityName= $request->city_name;
               $data->AreaName= $request->areaName;
               $data->Address= $request->Address;
               $data->Order_option= $request->Order_Option;
               $data->Delivary_free= $request->shipping;
               $data->UserGmail= $request->user_gmail;
               $data->save();

               return "User Information Add SuccessFull..";
            }else{
               return "User Information Add Failde..";
            }
    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
