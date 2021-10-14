<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWishlistAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishlist__adds', function (Blueprint $table) {
            $table->id();
            $table->string('Bill_Id');
            $table->string('serial_id');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_category');
            $table->string('product_size');
            $table->integer('sell_quantity');
            $table->integer('sell_discount');
            $table->string('image');
            $table->string('product_details');
            $table->string('Brand_name');
            $table->string('user_gmail');
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
        Schema::dropIfExists('wishlist__adds');
    }
}
