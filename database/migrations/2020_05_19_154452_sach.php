<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_sach', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('ten_sach', 255);
            $table->unsignedBigInteger('id_tac_gia');
            $table->unsignedBigInteger('id_loai_sach');
            $table->unsignedBigInteger('id_nha_xuat_ban');
            $table->integer('so_trang');
            $table->string('ngay_xuat_ban', 255);
            $table->string('sku', 255);
            $table->string('trong_luong', 255);
            $table->string('trang_thai', 255);
            $table->string('hinh', 255);
            $table->integer('don_gia');
            $table->integer('gia_bia');
            $table->string('doc_thu', 255);
            $table->tinyInteger('noi_bat');

            //forign
            $table->foreign('id_tac_gia')
            ->references('id')->on('bs_tac_gia')->onDelete('cascade');
            $table->foreign('id_loai_sach')
            ->references('id')->on('bs_loai_sach')->onDelete('cascade');
            $table->foreign('id_nha_xuat_ban')
            ->references('id')->on('bs_nha_xuat_ban')->onDelete('cascade');
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
