<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulidTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulid_trips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gendre');
            $table->string('name');
            $table->string('email');
            $table->string('country_code');
            $table->string('phone');
            $table->string('dep_date');
            $table->string('arr_date');
            $table->string('dep_country');
            $table->string('arr_country');
            $table->string('message')->nullable();
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
        Schema::dropIfExists('bulid_trips');
    }
}
