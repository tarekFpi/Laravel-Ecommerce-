<?php

namespace App\Http\Controllers;

use App\Models\Category_model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class CategoryModelController extends Controller
{

    public function index()
    {
      $get_category=Category_model::all();

       return response()->json($get_category);
    }


    public function create()
    {

      return view('CategoryNameAdd');
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $category=new Category_model();
            $category->Category_name=str_replace(' ','-',$request->category_name);
            $category->Sub_category= str_replace(' ','-',$request->sub_category);

            $category->Date= $request->upload_date;
            $category->save();
            return "Category Name Insert SuccessFull..";
        }
    }


    public function show(Category_model $category_model)
    {

    }


    public function edit(Request $request)
    {


        if($request->ajax()){
            $data=Category_model::find($request->searial_id);
          $data->Category_name=str_replace(' ','-',$request->categoryName);
          $data->Sub_category=str_replace(' ','-',$request->Subcategory);
          $data->save();
          return "Category Name Update SuccessFull..";
        }
    }


    public function destroy(Request $request)
    {
        if($request->ajax()){
            $data=Category_model::find($request->delete_id);
            $data->delete();
            return "Category Name Delete SuccessFull..";
        }
    }

    public function Live_Search_categorySubcateory(Request $request)
    {
        if($request->ajax()){
            $output="";
            $output=Category_model::where('Category_name','like','%'.$request->search_data.'%')->orWhere('Sub_category','like','%'.$request->search_data.'%')->get();
            return response()->json($output);
    }
    }
}
