<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandModelController;
use App\Http\Controllers\Cart_order_user;
use App\Http\Controllers\PurchaseModelController;
use App\Http\Controllers\ProdctnameModelController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\SellModelController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\UserAreaAddController;
use App\Http\Controllers\WishlistAddController;
use App\Http\Controllers\Product_show_controller;
use App\Http\Controllers\PaymentMathodAddController;
use App\Http\Controllers\UesrInfromationAdd;
use App\Http\Controllers\CategoryModelController;
use App\Http\Controllers\ApprovOrderController;
use App\Http\Controllers\Voucher_AddController;
use App\Http\Controllers\userFinal_OrderShow;
use App\Http\Controllers\LoginModelController;
use App\Http\Controllers\Tracking_orderController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Payment_test;
//
/* Route::get('/', function () {
    return view('index');
});
 */
Route::get('/Adminlog',function(){
    return redirect()->route('login');
  });

/*  =========== start home page to  order show ================== */

Route::get('/', function () {
    return view('index');
})->name('index');

 // password.chang
 Route::get('/password.chang','App\Http\Controllers\Auth\ConfirmPasswordController@confromPassword')->name('password.chang');

 //Register
 Route::get('/register.page','App\Http\Controllers\Auth\RegisterController@Register_page')->name('register');

 //Change password Form
 Route::get('/change_password','App\Http\Controllers\Auth\ResetPasswordController@changePassword')->name('change_password');

 ///Update password
 Route::post('/update.password','App\Http\Controllers\Auth\ResetPasswordController@update_password')->name('update.password');


//user index page  frist order show serarch_homepage_order
Route::get('/FristOrder_show',[Product_show_controller::class,'ShowFristOrder'])->name('FristOrder_show');

// index serarch_homepage_order
Route::get('/serarch_homepage_order',[Product_show_controller::class,'LiveSearch_prdouctShow'])->name('serarch_homepage_order');

// index Latest order show
Route::get('/LatestOrder_show',[Product_show_controller::class,'LatestOderShow'])->name('LatestOrder_show');

/*  =========== end home page  order ================== */



/*  =========== start Admin pgae  ================== */
//Admin Brand Add Form Show
Route::get('/Brand_FromShow',[BrandModelController::class,'Create'])->name('Brand_FromShow');


//Admin Brand Add and Show store
Route::get('/show_all_brandName',[BrandModelController::class,'index'])->name('show_all_brandName');

//Admin Brand  Store
Route::post('/Brand_insert',[BrandModelController::class,'store'])->name('Brand_insert');

//Admin Brand  Update
Route::get('/Brand_NameUpdate',[BrandModelController::class,'edit'])->name('Brand_NameUpdate');

//BrandName_delete
Route::get('/BrandName_delete',[BrandModelController::class,'delete'])->name('BrandName_delete');

//Admin Caregory Name  Add Form
Route::get('/category_formShow',[CategoryModelController::class,'create'])->name('category_formShow');

//Admin Caregory Name  insert Show
Route::get('/show_all_category',[CategoryModelController::class,'index'])->name('show_all_category');

//Admin Caregory Name store
Route::post('/Category_insert',[CategoryModelController::class,'store'])->name('Category_insert');

//CateogryName_update
Route::get('/CateogryName_update',[CategoryModelController::class,'edit'])->name('CateogryName_update');

//categoryName_delete
Route::get('/categoryName_delete',[CategoryModelController::class,'destroy'])->name('categoryName_delete');

//search_category_subCategory
Route::get('/search_category_subCategory',[CategoryModelController::class,'Live_Search_categorySubcateory'])->name('search_category_subCategory');

//Admin  _product Add_Name Form
Route::get('/show_product_Name_form',[ProdctnameModelController::class,'create'])->name('show_product_Name_form');

//Admin show All _product _Name
Route::get('/show_all_product_Name',[ProdctnameModelController::class,'index'])->name('show_all_product_Name');

//Admin  product store
Route::post('/productName_insert',[ProdctnameModelController::class,'store'])->name('productName_insert');

//productName_Update
Route::get('/productName_Update',[ProdctnameModelController::class,'edit'])->name('productName_Update');

//productName_Delete
Route::get('/productName_Delete',[ProdctnameModelController::class,'destroy'])->name('productName_Delete');

//search_productName
Route::get('/search_productName',[ProdctnameModelController::class,'Live_Search_productName'])->name('search_productName');


//Admin payment mathod Add From
Route::get('/paymentmathod_Add_Form',[PaymentMathodAddController::class,'Crate'])->name('paymentmathod_Add_Form');

//Admin payment mathod  Add and Show
Route::get('/paymentmathod_Show',[PaymentMathodAddController::class,'index'])->name('paymentmathod_Show');

//Admin payment mathod Add
Route::post('/paymentmathod_insert',[PaymentMathodAddController::class,'store'])->name('paymentmathod_insert');

//search_paymentMathod
Route::get('/search_paymentMathod',[PaymentMathodAddController::class,'LiveSearch_paymentMathod'])->name('search_paymentMathod');

//update_paymentMathod
Route::get('/update_paymentMathod',[PaymentMathodAddController::class,'Edit'])->name('update_paymentMathod');

//Admin
Route::get('/delete_paymentMathod',[PaymentMathodAddController::class,'destroy'])->name('delete_paymentMathod');

//Admin purchase prduct From
Route::get('/prduct_purchaseFrom',[PurchaseModelController::class,'create'])->name('prduct_purchaseFrom');

//update_getData table tr click get Data
Route::get('/update_getData',[PurchaseModelController::class,'Update_getData'])->name('update_getData');

//update_purchase_product update Button click
Route::get('/update_purchase_product',[PurchaseModelController::class,'edit'])->name('update_purchase_product');

//Delete_purchase_product
Route::get('/Delete_purchase_product',[PurchaseModelController::class,'destroy'])->name('Delete_purchase_product');


//Admin purchase All product Show
Route::get('/show_all_purchase',[PurchaseModelController::class,'index'])->name('show_all_purchase');

//Admin purchase  product store
Route::post('/purchase_insert',[PurchaseModelController::class,'store'])->name('purchase_insert');

//Admin purchase  product getCategory Name
Route::get('/Category_name',[PurchaseModelController::class,'CategoryName'])->name('Category_name');



//Admin purchase  product category for getSubcategory Name
Route::get('/sub_category',[PurchaseModelController::class,'Sub_Category'])->name('sub_category');

//Admin purchase  product  barand name
Route::get('/get_brandName',[PurchaseModelController::class,'Brand_Name'])->name('get_brandName');

//Admin purchase  product category ,getSubcategory barand for product
Route::get('/get_productName',[PurchaseModelController::class,'Product_Name'])->name('get_productName');

//Admin purchase  product store
Route::post('/purchase_insert',[PurchaseModelController::class,'store'])->name('purchase_insert');

//search_purchase_Porduct
Route::get('/search_purchase_Porduct',[PurchaseModelController::class,'LiveSearch_profit_produt'])->name('search_purchase_Porduct');


//Admin profit show product From
Route::get('/profit_show_From',[ProfitController::class,'create'])->name('profit_show_From');

//Admin profit show product table
Route::get('/profit_product',[ProfitController::class,'profit'])->name('profit_product');

// Admin profit show product table serarch
Route::get('/serarch_profit_Porduct',[Product_show_controller::class,'LiveSearch_profit_produt'])->name('serarch_profit_Porduct');

// Admin stock show product From show
Route::get('/stockFrom_show',[StockController::class,'create'])->name('stockFrom_show');

// Admin stock show product table show
Route::get('/stockProduct',[StockController::class,'Stock'])->name('stockProduct');

// Admin stock show product table Live search
Route::get('/serarch_stock_Porduct',[StockController::class,'Live_stockProductShow'])->name('serarch_stock_Porduct');

// Admin SellTable_All_OrderShow
Route::get('/SellTable_From_Show',[SellModelController::class,'create'])->name('SellTable_From_Show');

// Admin SellTable_All_OrderShow
Route::get('/SellTable_All_OrderShow',[SellModelController::class,'index'])->name('SellTable_All_OrderShow');

//Admin sell_order_status_update
Route::get('/sell_order_statusUpdate',[SellModelController::class,'sell_orderStatus_update'])->name('sell_order_statusUpdate');


//Admin  sell_orde_view
Route::get('/sell_orde_view',[SellModelController::class,'user_sell_OrderView'])->name('sell_orde_view');

//Admin sell_order_delete
Route::get('/sell_order_delete',[SellModelController::class,'destroy'])->name('sell_order_delete');

//sell_order_approv
Route::post('/Approve_OrderAdd',[ApprovOrderController::class,'Approve_OrderAdd'])->name('Approve_OrderAdd');

//Approv_Order From
Route::get('/Approv_ShowFrom',[ApprovOrderController::class,'Create'])->name('Approv_ShowFrom');

//Approv_order_view
Route::get('/Approv_order_view',[ApprovOrderController::class,'user_Approv_OrderView'])->name('Approv_order_view');

//approv_order_delete
Route::get('/approv_order_delete',[ApprovOrderController::class,'user_Approv_OrderView'])->name('approv_order_delete');

//approv_order date with count total
Route::get('/Approv_total_count',[ApprovOrderController::class,'Approv_total_count'])->name('Approv_total_count');


//approv_order_delete
Route::get('/approv_order_delete',[ApprovOrderController::class,'user_Approv_OrderView'])->name('approv_order_delete');

//Approv_OrderShow
Route::get('/Approv_OrderShow',[ApprovOrderController::class,'index'])->name('Approv_OrderShow');

//Approv_Order Delete
Route::get('/approv_order_delete',[ApprovOrderController::class,'destroy'])->name('approv_order_delete');

//Admin create user Area From
Route::get('/userArea_showFrom',[UserAreaAddController::class,'create'])->name('userArea_showFrom');

//Admin UserArea Add with ShowAll table
Route::get('/UserAreaShowAll',[UserAreaAddController::class,'index'])->name('UserAreaShowAll');

//Admin  UserArea_Insert
Route::POST('/UserArea_Insert',[UserAreaAddController::class,'store'])->name('UserArea_Insert');

//Delete_Area
Route::get('/Delete_Area',[UserAreaAddController::class,'destroy'])->name('Delete_Area');

//search_userArea
Route::get('/search_userArea',[UserAreaAddController::class,'Live_Search_userArea'])->name('search_userArea');

//update_Area
Route::get('/update_Area',[UserAreaAddController::class,'edit'])->name('update_Area');

//Vourchaer Cord Add From
Route::get('/vourcher_AddForm',[Voucher_AddController::class,'create'])->name('vourcher_AddForm');

//Vourchaer product Name Show
Route::get('/vourcher_productName_show',[Voucher_AddController::class,'getProduct_Name'])->name('vourcher_productName_show');

//Vourchaer Corde Show All
Route::get('/vourcherCord_show',[Voucher_AddController::class,'index'])->name('vourcherCord_show');

//voucher cord name for product Price
Route::get('/voucher_getPrice',[Voucher_AddController::class,'getProduct_price'])->name('voucher_getPrice');

//voucher_getimage
Route::get('/voucher_getimage',[Voucher_AddController::class,'getProduct_Imgae'])->name('voucher_getimage');


//voucher store
Route::post('/vourcher_cod_store',[Voucher_AddController::class,'store'])->name('vourcher_cod_store');

//vourcher_deactivate
Route::get('/vourcher_deactivate',[Voucher_AddController::class,'Voucher_code_Deactivate'])->name('vourcher_deactivate');

//Voucher_code_Activate
Route::get('/vourcher_Activate',[Voucher_AddController::class,'Voucher_code_Activate'])->name('vourcher_Activate');

//voucher_codUpdate
Route::get('/voucher_codUpdate',[Voucher_AddController::class,'Edit'])->name('voucher_codUpdate');

//voucher_codDelete
Route::get('/voucher_codDelete',[Voucher_AddController::class,'destroy'])->name('voucher_codDelete');

//serarch_voucher_code
Route::get('/serarch_voucher_code',[Voucher_AddController::class,'live_Search'])->name('serarch_voucher_code');

//voucher_match cart page
Route::get('/voucherCode_match',[SellModelController::class,'vourcher_code_Match'])->name('voucherCode_match');

//Voucher_selltable_order
Route::post('/Voucher_selltableOrder',[SellModelController::class,'Voucher_Code_match_store'])->name('Voucher_selltableOrder');

//get Current sell order
Route::get('/Count_sellItem',[SellModelController::class,'countSell'])->name('Count_sellItem');

//get Current sell order show
Route::get('/SellTable_All_OrderShow_count',[SellModelController::class,'countSell'])->name('SellTable_All_OrderShow_count');

Route::get('/Count_puchase_Item',[SellModelController::class,'puchaseOrder_count'])->name('Count_puchase_Item');

//Count_Approve_Item
Route::get('/Count_Approve_Item',[SellModelController::class,'ApproveOrder_count'])->name('Count_Approve_Item');


/*  =========== end Admin page ================== */




/*  =========== start home page to Cart page order From ================== */

//user index page to cart page show
Route::get('/user_order_cart/{id}',[Cart_order_user::class,'ButtonClick_cart'])->name('user_order_cart');

//user cart page order login with Add_to_cart button click Cart Add
Route::post('/AddToCart',[Cart_order_user::class,'Add_toCart'])->name('AddToCart');

//user login Exit Add_to_cart button click Cart Add
Route::post('/login_Add_toCart',[Cart_order_user::class,'LoginAddTo_cart'])->name('login_Add_toCart');


//user cart page order login with BuyNow button click Cart Add
Route::post('/Buynow_loginAdd_toCart',[Cart_order_user::class,'BuyLogin_match'])->name('Buynow_loginAdd_toCart');

//user login Exit  for BuyNow button click Cart Add show
Route::post('/login_Bynow_Add_toCart',[Cart_order_user::class,'BuyNowAdd_toCart'])->name('login_Bynow_Add_toCart');


//user  header Cart icon click CartShow
Route::get('/Login_cartShow_order',[Cart_order_user::class,'CartShow_Login'])->name('Login_cartShow_order');

//Add_toCart_increment_stock
Route::get('/Add_toCart_increment_stock',[Cart_order_user::class,'quantity_incrementStock'])->name('Add_toCart_increment_stock');
/*  =========== End  home page to Cart page order From ================== */





/*  =========== start user Address Add From ================== */

// user Cart order show check_userAddress
Route::get('/check_userAddress',[UesrInfromationAdd::class,'CheckUser_information'])->name('check_userAddress');


 //UserInformation_Ad user
 Route::get('/UserInformation_Add',[UesrInfromationAdd::class,'create'])->name('UserInformation_Add');

 //UserInformation_Ad from getRegion_Name
 Route::get('/get_RegionName',[UesrInfromationAdd::class,'getRegionName'])->name('get_RegionName');

 //UserInformation_Ad from get_CityName
 Route::get('/get_CityName',[UesrInfromationAdd::class,'getCityName'])->name('get_CityName');

  //UserInformation_Ad from getAreaName
  Route::get('/get_AreaName',[UesrInfromationAdd::class,'getAreaName'])->name('get_AreaName');

   //UserInformation_Ad from getShipping
   Route::get('/get_Shipping',[UesrInfromationAdd::class,'getShipping'])->name('get_Shipping');

   //UserInformation_Ad Store
   Route::post('/UserInformation_Insert',[UesrInfromationAdd::class,'store'])->name('UserInformation_Insert');

/*  =========== End user Address Add  ================== */


/*  =========== Wislist order Add   ================== */

//wishlist_Add_toCart user login Exit Add to cart
Route::post('/wishlist_Add_toCart',[WishlistAddController::class,'WishListAdd'])->name('wishlist_Add_toCart');

//WishList_Login user
Route::get('/Wishlist_login',[WishlistAddController::class,'WishList_Login'])->name('Wishlist_login');

//WishList_ order send Add To cart Add
Route::post('/WishList_sendOrderAdd_taCart',[WishlistAddController::class,'WishList_Login'])->name('WishList_sendOrderAdd_taCart');

//Wishlist ordere Show
Route::get('/wishlist_formShow',[WishlistAddController::class,'create'])->name('wishlist_formShow');

//Wishlist ordere From Show
Route::get('/wishlist_formShow',[WishlistAddController::class,'create'])->name('wishlist_formShow');

//wishlist All order table show
Route::get('/user_orderWishlist',[WishlistAddController::class,'index'])->name('user_orderWishlist');

//wishlist All order table show
Route::get('/user_orderWishlist',[WishlistAddController::class,'index'])->name('user_orderWishlist');

//wishlist_Order_delete
Route::get('/wishlist_Order_delete',[WishlistAddController::class,'destroy'])->name('wishlist_Order_delete');

//WishList_ send Order Add_taCart
Route::get('/wishlist_to_AddCart',[WishlistAddController::class,'WishList_sendOrderAdd_taCart'])->name('wishlist_to_AddCart');


//wishlist_orderLogin show HOme page
Route::get('/wishlist_orderLogin',[WishlistAddController::class,'WishList_Login'])->name('wishlist_orderLogin');

//wishlist_order count
Route::get('/wishlist_orderCount',[WishlistAddController::class,'count_wishlist_Order'])->name('wishlist_orderCount');
/*  ===========End Wislist order Add   ================== */



//cart_orderCount
Route::get('/cart_orderCount',[Cart_order_user::class,'count_Cart_Order'])->name('cart_orderCount');

//user Cart order All from show
Route::get('/userCart_From',[Cart_order_user::class,'index'])->name('userCart_From');

//user Cart All order Show
Route::get('/userCartShow',[Cart_order_user::class,'Cart_order_showGmail'])->name('userCartShow');

//user cart table Add infromation Show
Route::get('/showUserAdddress',[Cart_order_user::class,'UserInformatinShow'])->name('showUserAdddress');

//user selltable order insert select
Route::post('/selltable_CartAdd',[SellModelController::class,'store'])->name('selltable_CartAdd');

//user Cart order payment getway show
Route::get('/show_paymentMathod',[SellModelController::class,'show_paymentMathod'])->name('show_paymentMathod');

//payment mathod select for admin phone number get
Route::get('/get_AdminPhone',[SellModelController::class,'get_AdminPhone'])->name('get_AdminPhone');

//userInfromation_update
Route::get('/userInfromation_update',[SellModelController::class,'userInfromation_update'])->name('userInfromation_update');

//Cart_quantity_decrement update
Route::get('/Cart_quantity_decrement',[Cart_order_user::class,'edit'])->name('Cart_quantity_decrement');

//Cart_Order_delete
Route::get('/Cart_Order_delete',[Cart_order_user::class,'destroy'])->name('Cart_Order_delete');

//User Final order Show
Route::get('/userFinal_orderShow',[userFinal_OrderShow::class,'index'])->name('userFinal_orderShow');

//User Final order From show
Route::get('/userFinal_orderForm',[userFinal_OrderShow::class,'create'])->name('userFinal_orderForm');

//getTracking_number
Route::get('/getTracking_number',[userFinal_OrderShow::class,'getTracking'])->name('getTracking_number');

//user_OrderCancle
Route::get('/user_OrderCancle',[userFinal_OrderShow::class,'Order_Cancle'])->name('user_OrderCancle');

//Cart_quantity_increment update
Route::get('/Cart_quantity_increment',[Cart_order_user::class,'update'])->name('Cart_quantity_increment');


//tracking number order show
Route::get('/tracking_orderForm/{userGmail}/{tracking_number}',[Tracking_orderController::class,'Show_page'])->name('tracking_orderForm');


//trackin_code_matchShow_Order
Route::get('/trackin_matchShow_Order',[Tracking_orderController::class,'index'])->name('trackin_matchShow_Order');

//show_Final_Order get tracking and gmail match
Route::get('/show_Final_Order',[Tracking_orderController::class,'create'])->name('show_Final_Order');


Route::get('/Mytest', function () {
    return view("test");
});


//user LogOut page
Route::get('/userLogout',[LoginModelController::class,'Logout'])->name('userLogout');

//Check_outStock_check
Route::get('/Check_outStock_check',[SellModelController::class,'Cart_orderStock_check'])->name('Check_outStock_check');

//Cancle order Show From
Route::get('/Cancle_orderForm',[SellModelController::class,'Cancle_orderForm'])->name('Cancle_orderForm');

//Cancle order Show softDelete
Route::get('/Soft_order_Show',[SellModelController::class,'Soft_orderShow_All'])->name('Soft_order_Show');

//permantlySoft_delete
Route::get('/permantlySoft_delete',[SellModelController::class,'SoftDelete_order'])->name('permantlySoft_delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::post('/token',[Payment_test::class,'token'])->name('token');

//Route::get('/createpayment',[Payment_test::class,'createpayment'])->name('createpayment');

//Route::get('/executepayment',[Payment_test::class,'executepayment'])->name('executepayment');




