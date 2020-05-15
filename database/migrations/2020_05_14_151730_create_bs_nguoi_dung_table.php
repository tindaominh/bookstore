<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsNguoiDungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_nguoi_dung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tai_khoan')->nullable();
            $table->string('mat_khau')->nullable();
            $table->string('id_loai_user')->nullable();
            $table->string('id_phan_quyen')->nullable();
            $table->string('ho_ten')->nullable();
            $table->string('email')->nullable();
            $table->string('ngay_sinh')->nullable();
            $table->string('dia_chi')->nullable();
            $table->integer('diem_tich_luy')->nullable();
            $table->dateTime('ngay_dang_ky')->nullable();
            $table->dateTime('thoi_gian_dang_nhap')->nullable();
            $table->string('active_code')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('so_lan_reset')->nullable();
            $table->string('dien_thoai')->nullable();
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
        Schema::dropIfExists('bs_nguoi_dung');
    }
}
