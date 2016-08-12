<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddApplicationsCountToTalksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('talks', function (Blueprint $table) {
            //
            $table->integer('likes_count');
            $table->integer('applications_count');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talks', function (Blueprint $table) {
            //
            $table->dropColumn([
            'likes_count', 'applications_count'
            ]);
        });
    }
}
