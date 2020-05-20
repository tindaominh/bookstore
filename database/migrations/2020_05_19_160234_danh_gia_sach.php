<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DanhGiaSach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_danh_gia_sach', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('danh_gia');
            $table->unsignedBigInteger('id_nguoi_dung');

            //forign
            $table->foreign('id_nguoi_dung')->references('id')->on('bs_nguoi_dung');
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
        //
    }
}
