<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoaiSach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_loai_sach', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('ten_loai_sach', 255);
            $table->integer('id_loai_cha');
            $table->string('sap_xep', 255);
            $table->tinyInteger('trang_thai');
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
