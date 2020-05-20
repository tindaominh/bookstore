<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_don_hang', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('ma_don_hang', 255);
            $table->integer('tong_tien');
            $table->date('ngay_dat');
            $table->unsignedBigInteger('id_nguoi_dung');

            //forign
            $table->foreign('id_nguoi_dung')
            ->references('id')->on('bs_nguoi_dung');
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
