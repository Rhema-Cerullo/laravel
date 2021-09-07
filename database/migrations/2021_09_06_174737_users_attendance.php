<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class UsersAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_attendance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('attendance_id')->unsigned();
            $table->foreign('attendance_id')->unsigned()->references('id')->on('attendance');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id')->unsigned()->references('id')->on('users');
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
        //
    }
}
