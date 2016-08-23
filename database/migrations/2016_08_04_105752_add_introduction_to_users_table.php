<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIntroductionToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('gender');
            $table->string('birthday');
            $table->string('place');
            $table->string('introduction');
            $table->string('vision');
            $table->string('current_job');
            $table->string('current_position');
            $table->string('current_detail');
            $table->string('past_job');
            $table->string('past_position');
            $table->string('past_detail');
            $table->string('latest_school');
            $table->string('latest_major');
            $table->string('latest_school_period');
            $table->string('other_school');
            $table->string('other_major');
            $table->string('other_school_period');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('gender');
            $table->dropColumn('birthday');
            $table->dropColumn('place');
            $table->dropColumn('introduction');
            $table->dropColumn('vision');
            $table->dropColumn('current_job');
            $table->dropColumn('current_position');
            $table->dropColumn('current_detail');
            $table->dropColumn('past_job');
            $table->dropColumn('past_position');
            $table->dropColumn('past_detail');
            $table->dropColumn('latest_school');
            $table->dropColumn('latest_major');
            $table->dropColumn('latest_school_period');
            $table->dropColumn('other_school');
            $table->dropColumn('other_major');
            $table->dropColumn('other_school_period');
        });
    }
}
