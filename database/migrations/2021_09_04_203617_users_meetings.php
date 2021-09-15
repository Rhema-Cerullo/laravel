<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersMeetings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_meetings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('creator');
            $table->boolean('member');
            $table->string('user_status');
            $table->integer('user_id');
            $table->foreign('user_id')->unsigned()->references('id')->on('users');
            $table->integer('meeting_id');
            $table->foreign('meeting_id')->unsigned()->references('id')->on('meetings');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_meetings');
    }
}
