<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_don_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma_don_hang')->nullable();
            $table->integer('tong_tien')->nullable();
            $table->dateTime('ngay_dat')->nullable();
            $table->string('id_nguoi_dung')->nullable();
            $table->string('ho_ten_nguoi_nhan')->nullable();
            $table->string('email_nguoi_nhan')->nullable();
            $table->string('so_dien_thoai_nguoi_nhan')->nullable();
            $table->tinyInteger('trang_thai')->nullable();
            $table->string('dia_chi_nguoi_nhan')->nullable();
            $table->timestamps();

            // $table->foreign('id_nguoi_dung')->references('id')->on('nguoi_dung')->onUpdate('RESTRICT')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_don_hang');
    }
}
