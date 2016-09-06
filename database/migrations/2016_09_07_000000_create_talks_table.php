<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talks', function (Blueprint $table) {
            $table->primary('id');
            $table->integer('mentor_id');
            $table->varchar('title', 255);
            $table->integer('category_id');
            $table->integer('price');
            $table->text('detail');
            $table->varchar('pic0_path', 255);
            $table->varchar('pic1_path', 255);
            $table->timestamps();
            $table->integer('likes_count');
            $table->integer('applications_count');
            $table->integer('talk_time');
        });
    }

    /**
     * マイグレーションを元に戻す
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('talks');
    }
}