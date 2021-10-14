<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_models', function (Blueprint $table) {
            $table->id();
            $table->string('bill_number');
            $table->string('Category');
            $table->string('sub_Category');
            $table->string('brand_name');
            $table->string('product_name');
            $table->string('purchase_price');
            $table->string('purchase_quanitiy');
            $table->string('purchase_discount');
            $table->string('sell_price');
            $table->string('Suppliers_name');
            $table->string('sell_discount');
            $table->text('product_details');
            $table->string('product_size');
            $table->string('upload_date');
            $table->string('image');
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
        Schema::dropIfExists('purchase_models');
    }
}
