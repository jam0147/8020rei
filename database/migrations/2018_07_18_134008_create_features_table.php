<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('adjusted_sqft');
            $table->integer('lot_size');
            $table->integer('bed');
            $table->integer('bath');
            $table->integer('stories');
            $table->integer('units');
            $table->integer('year_built');
            $table->integer('effective_year_built');

            $table->integer('properties_id')->unsigned();
            $table->timestamps();
            $table->foreign('properties_id')->references('id')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('features');
    }
}
