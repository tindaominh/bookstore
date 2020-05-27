<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_sach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_sach')->nullable();
            $table->integer('id_tac_gia')->nullable();
            $table->foreign('id_tac_gia')->references('id')->on('bs_tac_gia')->onUpdate('RESTRICT')->onDelete('cascade');
            $table->text('gioi_thieu')->nullable();
            $table->string('doc_thu')->nullable();
            $table->integer('id_loai_sach')->nullable();
            $table->foreign('id_loai_sach')->references('id')->on('bs_loai_sach')->onDelete('cascade');
            $table->integer('id_nha_xuat_ban')->nullable();
            $table->integer('so_trang')->nullable();
            $table->string('ngay_xuat_ban')->nullable();
            $table->string('kich_thuoc')->nullable();
            $table->string('sku')->nullable();
            $table->string('trong_luong')->nullable();
            $table->tinyInteger('trang_thai')->nullable();
            $table->string('hinh')->nullable();
            $table->integer('don_gia')->nullable();
            $table->integer('gia_bia')->nullable();
            $table->integer('giam_gia')->nullable();
            $table->tinyInteger('noi_bat')->nullable();
            $table->timestamps();

            
            // $table->foreign('id_loai_sach')->references('id')->on('loai_sach')->onUpdate('RESTRICT')->onDelete('cascade');
            // $table->foreign('id_nha_xuat_ban')->references('id')->on('nha_xuat_ban')->onUpdate('RESTRICT')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_sach');
    }
}
