<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersFiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_owner');
            $table->boolean('can_read');
            $table->boolean('can_modify');
            $table->boolean('can_delete');
            $table->integer('user_id');
            $table->foreign('user_id')->unsigned()->references('id')->on('users');
            $table->integer('file_id');
            $table->foreign('file_id')->unsigned()->references('id')->on('files');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_files');
    }
}
