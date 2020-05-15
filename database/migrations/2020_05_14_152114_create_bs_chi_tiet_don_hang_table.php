<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsChiTietDonHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_chi_tiet_don_hang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_don_hang')->nullable();
            $table->string('id_sach')->nullable();
            $table->string('so_luong')->nullable();
            $table->string('don_gia')->nullable();
            $table->string('thanh_tien')->nullable();
            $table->timestamps();

            // $table->foreign('id_don_hang')->references('id')->on('don_hang')->onUpdate('RESTRICT')->onDelete('cascade');
            // $table->foreign('id_sach')->references('id')->on('sach')->onUpdate('RESTRICT')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_chi_tiet_don_hang');
    }
}
