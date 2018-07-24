<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address',250);
            $table->string('city',60);
            $table->integer('zip');
            $table->year('year');
            $table->integer('land');
            $table->integer('bldg');
            $table->decimal('total',14,3);
            $table->decimal('total_value',14,3);
            $table->decimal('assessed',14,3);
            $table->integer('millcode');
            $table->string('land_use',250);
            $table->string('residential',10);
            $table->string('residential_type',40);
            $table->string('zoning',100);
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
        Schema::dropIfExists('properties');
    }
}
