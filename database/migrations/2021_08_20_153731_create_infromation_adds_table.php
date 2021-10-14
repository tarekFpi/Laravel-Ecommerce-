<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfromationAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infromation_adds', function (Blueprint $table) {
            $table->id();
            $table->string('UserName');
            $table->integer('phoneNumber',100);
            $table->string('RegionName');
            $table->string('CityName');
            $table->string('AreaName');
            $table->string('Address');
            $table->string('Order_option');
            $table->integer('Delivary_free');
            $table->string('UserGmail');
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
        Schema::dropIfExists('infromation_adds');
    }
}
