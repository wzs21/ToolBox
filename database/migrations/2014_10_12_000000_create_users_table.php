<?php

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
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('student_id',10)->unique();
            $table->string('password', 60);
            $table->string('phone_number',20);
            $table->string('photo_path');
            $table->tinyInteger('is_admin');
            $table->string('major');

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
        Schema::drop('users');
    }
}
