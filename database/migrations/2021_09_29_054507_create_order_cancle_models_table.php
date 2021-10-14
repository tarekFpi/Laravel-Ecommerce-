<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCancleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cancle_models', function (Blueprint $table) {
            $table->id();
            $table->string('Bill_no');
            $table->string('productName');
            $table->string('CategoryName');
            $table->string('Brand_name');
            $table->bigInteger('product_price');
            $table->string('product_size');
            $table->bigInteger('sell_quntity');
            $table->bigInteger('sell_discount');
            $table->string('Voucher_Cord');
            $table->bigInteger('Voucher_discound');
            $table->string('UserName');
            $table->bigInteger('phoneNumber');
            $table->string('RegionName');
            $table->string('CityName');
            $table->string('AreaName');
            $table->string('Address');
            $table->string('Order_option');
            $table->integer('Delivary_free');
            $table->string('UserGmail');
            $table->string('Payment_mathod');
            $table->string('Admin_bkashPhone');
            $table->bigInteger('userBkash_phone');
            $table->string('transaction_id');
            $table->string('Image');
            $table->string('OrderDate');
            $table->string('Tracking_number');
            $table->string('Order_status');
            $table->string('Action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_cancle_models');
    }
}
