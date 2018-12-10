<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Client extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('website');
            $table->string('email');
            $table->string('phone');
            $table->string('description');
            $table->integer('mcc');
            $table->string('metadata');
            $table->string('ein');
            $table->string('owner_first_name');
            $table->string('owner_last_name');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->string('owner_cpf');
            $table->string('street_address');
            $table->string('complement');
            $table->string('additional_info');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
