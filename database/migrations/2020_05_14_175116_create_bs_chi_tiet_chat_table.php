<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsChiTietChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_chi_tiet_chat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id_chat')->nullable();
            $table->integer('id_nguoi_dung_tl')->nullable();
            $table->integer('time_chat')->nullable();
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
        Schema::dropIfExists('bs_chi_tiet_chat');
    }
}
