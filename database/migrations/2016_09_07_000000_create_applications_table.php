<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('talk_id')->unsigned();
            $table->foreign('talk_id')->references('id')->on('talks');
            $table->tinyInteger('approved_flag');
            $table->tinyInteger('paid_flag');
            $table->tinyInteger('user_finished_flag');
            $table->tinyInteger('mentor_finished_flag');
            $table->timestamp('applied_at');
            $table->timestamp('approved_at');
            $table->timestamp('paid_at');
            $table->timestamp('finished_at');
            $table->date('talk_date');
            $table->time('starting_time');
        });
    }

    /**
     * マイグレーションを元に戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applications');
    }
}