<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendeds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number',20);
            $table->string('body',160)->nullable();
            $table->string('status',20)->nullable();
            $table->integer('template_id')->nullable()->unsigned();
            $table->integer('message_id')->default(1)->unsigned();
            $table->timestamps();

            $table->foreign('template_id')->references('id')->on('templates');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sendeds');
    }
}
