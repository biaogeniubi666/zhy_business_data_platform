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
            $table->text('area')->nullable();
            $table->float('tmp')->nullable();
            $table->float('hum')->nullable();
            $table->float('aft')->nullable();
            $table->float('fav')->nullable();
            $table->float('co2')->nullable();
            $table->float('fd')->nullable();
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
