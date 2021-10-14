<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherCordAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher_cord_adds', function (Blueprint $table) {

            $table->id();
            $table->string('Vouecher_cord')->unique();
            $table->integer('Discount',100);
            $table->string('Current_date');
            $table->integer('status',100);
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
        Schema::dropIfExists('voucher_cord_adds');
    }
}
