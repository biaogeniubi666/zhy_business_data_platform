<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirSixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('air_sixes', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->text('CreateTime')->nullable();
            $table->text('TEMP')->nullable();
            $table->text('HUMI')->nullable();
            $table->text('PM25')->nullable();
            $table->text('CO2')->nullable();
            $table->text('CH2O')->nullable();
            $table->text('VOC')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('air_sixes');
    }
}
