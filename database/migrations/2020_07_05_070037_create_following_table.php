<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_following', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tb_user_id');
            $table->unsignedBigInteger('followers_id');
            $table->timestamps();

            $table->foreign('tb_user_id')->references('id')->on('tb_users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('following');
    }
}
