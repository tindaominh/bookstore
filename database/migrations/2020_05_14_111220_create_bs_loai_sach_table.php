<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsLoaiSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_loai_sach', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_loai_sach')->nullable();
            $table->integer('id_loai_cha')->nullable();
            $table->string('sap_xep')->nullable();
            $table->tinyInteger('trang_thai')->nullable();
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
        Schema::dropIfExists('bs_loai_sach');
    }
}
