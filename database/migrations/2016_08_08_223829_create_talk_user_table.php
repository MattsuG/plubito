<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalkUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talk_user', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('talk_id');
            $table->boolean('liked');
            $table->boolean('approved');
            $table->boolean('paid');
            $table->boolean('finished');
            $table->timestamp('approved_at');
            $table->timestamp('paid_at');
            $table->timestamp('finished_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('talk_user');
    }
}
