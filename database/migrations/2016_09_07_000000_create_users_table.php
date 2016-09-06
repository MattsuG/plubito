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
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->integer('gender');
            $table->string('email', 255);
            $table->string('profile_picture_path', 255);
            $table->string('introduction', 1023);
            $table->date('birthday');
            $table->string('password', 255);
            $table->string('remember_token', 255);
            $table->string('confirmation_token', 255);
            $table->timestamp('confirmed_at');
            $table->timestamp('confirmation_sent_at');
            $table->timestamps();
            $table->integer('role');
            $table->string('place', 255);
            $table->string('vision', 255);
            $table->string('current_job', 255);
            $table->string('current_position', 255);
            $table->string('current_detail', 255);
            $table->string('post_job', 255);
            $table->string('post_position', 255);
            $table->string('post_detail', 255);
            $table->string('latest_school', 255);
            $table->string('latest_major', 255);
            $table->string('latest_school_period', 255);
            $table->string('other_school', 255);
            $table->string('other_major', 255);
            $table->string('other_school_period', 255);
        });
    }

    /**
     * マイグレーションを元に戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}