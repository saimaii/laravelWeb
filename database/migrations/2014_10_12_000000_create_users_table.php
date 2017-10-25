<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('statusId');
            $table->boolean('subscribeRoute1');
            $table->boolean('subscribeRoute2');
            $table->boolean('subscribeRoute3');
            $table->boolean('subscribeRoute4');
            $table->boolean('subscribeRoute5');
            $table->boolean('subscribeRoute6');
            $table->string('notification1');
            $table->string('notification2');
            $table->string('notification3');
            $table->string('notification4');
            $table->string('notification5');
            $table->string('notification6');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
