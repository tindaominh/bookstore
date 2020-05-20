<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BinhLuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_binh_luan', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_sach');
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->text('noi_dung');
            $table->unsignedBigInteger('id_binh_luan_cha');
            $table->integer('ngay_binh_luan');
            $table->tinyInteger('trang_thai');

            //forign
            $table->foreign('id_sach')->references('id')->on('bs_sach');
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
