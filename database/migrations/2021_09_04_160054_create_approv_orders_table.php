<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('approv_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('serial_id');
            $table->string('Bill_no');
            $table->string('productName');
            $table->string('CategoryName');
            $table->string('Brand_name');
            $table->integer('product_price',100);
            $table->string('product_size');
            $table->integer('sell_quntity',100);
            $table->integer('sell_discount',100);
            $table->string('Voucher_Cord');
            $table->integer('Voucher_discound',100);
            $table->string('UserName');
            $table->integer('phoneNumber',100);
            $table->string('RegionName');
            $table->string('CityName');
            $table->string('AreaName');
            $table->string('Address');
            $table->string('Order_option');
            $table->integer('Delivary_free',100);
            $table->string('UserGmail');
            $table->string('Payment_mathod');
            $table->string('Admin_bkashPhone');
            $table->integer('userBkash_phone',100);
            $table->string('transaction_id');
            $table->string('product_details');
            $table->string('Image');
            $table->string('OrderDate');
            $table->string('Tracking_number');
            $table->string('Accept_Date');
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
        Schema::dropIfExists('approv_orders');
    }
}
