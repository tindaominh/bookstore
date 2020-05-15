<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsChatTrucTuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_chat_truc_tuyen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nguoi_dung')->nullable();
            $table->string('ip')->nullable();
            $table->tinyInteger('dang_online')->nullable();
            $table->tinyInteger('da_duoc_tra_loi')->nullable();
            $table->string('ho_ten')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('bs_chat_truc_tuyen');
    }
}
