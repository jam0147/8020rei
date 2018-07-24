<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motivations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('motivation_points');
            $table->integer('mpts_texes');
            $table->integer('mpts_tax_deed');
            $table->integer('mpts_code_violations');
            $table->integer('mpts_vacant');
            $table->integer('mpts_estate');
            $table->integer('mpts_probate');
            $table->integer('mpts_out_of_state');
            $table->integer('mpts_bankruptcy');
            $table->integer('mpts_divorce');
            $table->integer('mpts_affidavit');
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
        Schema::dropIfExists('motivations');
    }
}
