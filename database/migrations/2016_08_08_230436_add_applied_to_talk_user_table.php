<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAppliedToTalkUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('talk_user', function (Blueprint $table) {
            //
            $table->boolean('applied');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('talk_user', function (Blueprint $table) {
            //
            $table->dropColumn([
            'applied'
            ]);
        });
    }
}
