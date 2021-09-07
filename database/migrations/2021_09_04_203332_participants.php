<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Participants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('group_status');
            $table->date('join_day');
            $table->boolean('admin');
            $table->boolean('member');
            $table->boolean('creator');
            $table->integer('group_chat_id');
            $table->foreign('group_chat_id')->unsigned()->references('id')->on('group_chats');
            $table->integer('user_id');
            $table->foreign('user_id')->unsigned()->references('id')->on('users');
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
        Schema::dropIfExists('participants');
    }
}
