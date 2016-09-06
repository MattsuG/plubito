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
            $table->primary('id');
            $table->varchar('firstname', 255);
            $table->varchar('lastname', 255);
            $table->integer('gender');
            $table->varchar('profile_picture_path', 255);
            $table->varchar('introduction', 1023);
            $table->date('birthday');
            $table->varchar('password', 255);
            $table->varchar('remember_token', 255);
            $table->varchar('confirmation_token', 255);
            $table->timestamp('confirmed_at');
            $table->timestamp('confirmation_sent_at');
            $table->timestamps();
            $table->integer('role');
            $table->varchar('place', 255);
            $table->varchar('vision', 255);
            $table->varchar('current_job', 255);
            $table->varchar('current_position', 255);
            $table->varchar('current_detail', 255);
            $table->varchar('post_job', 255);
            $table->varchar('post_position', 255);
            $table->varchar('post_detail', 255);
            $table->varchar('latest_school', 255);
            $table->varchar('latest_major', 255);
            $table->varchar('latest_school_period', 255);
            $table->varchar('other_school', 255);
            $table->varchar('other_major', 255);
            $table->varchar('other_school_period', 255);
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