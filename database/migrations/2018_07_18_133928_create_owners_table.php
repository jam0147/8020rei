<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner',100);
            $table->integer('num_of_properties');
            $table->string('type_of_owner',40);
            $table->integer('private_owners');
            $table->string('non_seller',20);
            $table->integer('companies_gov');
            $table->integer('trusts');
            $table->string('mailing_address',160);
            $table->string('mailing_city',60);
            $table->string('mailing_state',60);
            $table->integer('mailing_zip');
            $table->string('mailing_country',60);
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
        Schema::dropIfExists('owners');
    }
}
