<?php

namespace App\Http\Controllers;
use App\Models\Brand_model;
use App\Models\Category_model;
use App\Models\Purchase_model;
use App\Models\Prodctname_model;
use Illuminate\Http\Request;

class PurchaseModelController extends Controller
{

    public function index()
    {

        $getAll=Purchase_model::all();
        return  response()->json($getAll);
    }


    public function create()
    {
        return view('purchase_product');
    }

    public function CategoryName(){

    $CategoryName= Category_model::groupBy('Category_name')->get();

    return response()->json($CategoryName);

   }

   public function Sub_Category(Request $request){

    $subCategory= Category_model::where('Category_name',$request->Name)->get();
       return response()->json($subCategory);

   }

   //get Brand Name
   public function Brand_Name(){

    $BrandName= Brand_model::all();
   return response()->json($BrandName);

   }

    public function Product_Name(){
        $productName= Prodctname_model::all();
        return response()->json($productName);
    }



    public function store(Request $request)
    {

       if($request->ajax()){

        $file= $request->file('fileToUpload');
        $destinationPath = 'productImage/';

        $image_name=  $request->file('fileToUpload')->getClientOriginalName();

        $imag_url=$destinationPath.$image_name;

      $file->move(public_path('/productImage'),$file->getClientOriginalName());


       $data= new Purchase_model();
       $data->bill_number=$request->bill_number;
       $data->Category=$request->category_name;
       $data->sub_Category=$request->sub_category;
       $data->brand_name=$request->brand_name;
       $data->product_name=$request->product_name;
       $data->purchase_price=$request->purchase_price;
       $data->purchase_quanitiy=$request->purchase_quanitiy;
       $data->purchase_discount=$request->purchase_discount;
       $data->sell_price=$request->sell_price;
       $data->Suppliers_name=$request->suppliers_name;
       $data->sell_discount=$request->sell_discount;

       $data->product_details=$request->pd_details;
       $data->product_size=$request->pd_size;
       $data->upload_date=$request->date;
       $data->image=$imag_url;

       $data->save();
        return"Your Product Purchaes SuccessFull";

       }
    }

    public function Update_getData(Request $request)
    {

        if($request->ajax()){
          $data=Purchase_model::where('id',$request->id)->get();
          return response()->json($data);
        }
    }


    public function edit(Request $request)
    {

        if($request->ajax()){
          $find=Purchase_model::find($request->id);

          $find->purchase_price=$request->purchase_price;
          $find->purchase_quanitiy=$request->purchase_quatity;
          $find->sell_price=$request->sell_price;
          $find->sell_discount=$request->discount;
          $find->product_size=$request->pdSize;
         $find->save();
          return "Update SuccessFull..";
        }
    }



    public function destroy(Request $request)
    {
        if($request->ajax()){
            $find=Purchase_model::find($request->id);

            $image_url= $find->image;
             unlink($image_url);
            $find->delete();

            return "Product Delete SuccessFull..";
        }
    }

    function LiveSearch_profit_produt(Request $request){

        if($request->ajax()){
            $output="";
            $output=Purchase_model::where('Category','like','%'.$request->search_data.'%')->orWhere('brand_name','like','%'.$request->search_data.'%')->orWhere('bill_number','like','%'.$request->search_data.'%')->get();
            return response()->json($output);
    }
}



}
