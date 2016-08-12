<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAppliedAtToTalkUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('talk_user', function (Blueprint $table) {
            //
            $table->timestamp('applied_at');
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
            'applied_at'
            ]);
        });
    }
}
