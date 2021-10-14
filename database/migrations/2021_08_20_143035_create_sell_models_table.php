<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //`Tracking_number` `Odrder_status` `Admin_bkashPhone`,`userBkash_phone`
        Schema::create('sell_models', function (Blueprint $table) {
            $table->id();
            $table->integer('serial_id');
            $table->string('Bill_no');
            $table->string('productName');
            $table->string('CategoryName');
            $table->string('Brand_name');
            $table->integer('product_price');
            $table->string('product_size');
            $table->integer('sell_quntity');
            $table->integer('sell_discount');
            $table->string('Voucher_Cord');
            $table->integer('Voucher_discound');
            $table->string('UserName');
            $table->string('gmail');
            $table->integer('phoneNumber');
            $table->string('RegionName');
            $table->string('CityName');
            $table->string('AreaName');
            $table->string('Address');
            $table->string('Order_option');
            $table->integer('Delivary_free');
            $table->string('UserGmail');
            $table->string('Payment_mathod');
            $table->integer('Admin_bkashPhone',100);
            $table->integer('userBkash_phone',100);
            $table->string('transaction_id');
            $table->string('product_details');
            $table->string('Image');
            $table->string('OrderDate');
            $table->string('Tracking_number');
            $table->string('Order_status');
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
        Schema::dropIfExists('sell_models');
    }
}
