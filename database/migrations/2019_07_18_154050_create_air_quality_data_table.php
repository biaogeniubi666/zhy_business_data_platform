<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirQualityDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_quality_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('area');
            $table->float('tmp');
            $table->float('hum');
            $table->float('aft');
            $table->float('fav');
            $table->float('co2');
            $table->float('fd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_quality_data');
    }
}
