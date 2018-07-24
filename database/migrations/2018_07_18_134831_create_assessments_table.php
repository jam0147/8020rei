<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('living_sqft');
            $table->integer('actual_sqft');
            $table->date('just_value_last_sale_date');
            $table->decimal('yards_od_ownership',12,2);
            $table->date('new_last_sale_date');
            $table->date('last_sale_date');
            $table->decimal('sale_amount',14,3);
            $table->string('actial_sale',40);
            $table->decimal('land_bldg_value',14,3);
            $table->decimal('diff',14,3);

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
        Schema::dropIfExists('assessments');
    }
}
