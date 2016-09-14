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
            $table->string('profile_picture_path', 255)->nullable();
            $table->text('introduction')->nullable();
            $table->date('birthday')->nullable();
            $table->string('password', 255);
            $table->string('remember_token', 255);
            $table->string('confirmation_token', 255);
            $table->timestamp('confirmed_at')->datetime()->default(null);
            $table->timestamp('confirmation_sent_at');
            $table->timestamps();
            $table->integer('role');
            $table->string('place', 255)->nullable();
            $table->text('vision')->nullable();
            $table->text('others')->nullable();
            $table->string('current_job', 255)->nullable();
            $table->string('current_position', 255)->nullable();
            $table->text('current_detail')->nullable();
            $table->string('current_period', 255)->nullable();
            $table->string('past_job', 255)->nullable();
            $table->string('past_position', 255)->nullable();
            $table->text('past_detail')->nullable();
            $table->string('past_period', 255)->nullable();
            $table->string('latest_school', 255)->nullable();
            $table->string('latest_major', 255)->nullable();
            $table->string('latest_school_period', 255)->nullable();
            $table->string('other_school', 255)->nullable();
            $table->string('other_major', 255)->nullable();
            $table->string('other_school_period', 255)->nullable();
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