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
            $table->integer('user_id');
            $table->string('talk_id');
            $table->boolean('approved_flag');
            $table->boolean('paid_flag');
            $table->boolean('finished_flag');
            $table->timestamps();
            $table->timestamp('approved_at');
            $table->timestamp('paid_ad');
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
        Schema::drop('applications');
    }
}
