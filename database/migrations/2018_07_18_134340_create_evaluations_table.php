<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sale_type');
            $table->string('sale_qual',20);
            $table->date('sale_date');
            $table->integer('sale_amt');
            $table->integer('percentage');
            $table->integer('total');
       
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
        Schema::dropIfExists('evaluations');
    }
}
