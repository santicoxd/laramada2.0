<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_maps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('year');
            $table->text('iframe');
            $table->text('description')->nullable();
            
            $table->unsignedInteger('pollutant_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('pollutant_id')->references('id')->on('pollutants');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
