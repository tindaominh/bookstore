<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsDanhGiaSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_danh_gia_sach', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('danh_gia')->nullable();
            $table->integer('id_nguoi_dung')->nullable();
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
        Schema::dropIfExists('bs_danh_gia_sach');
    }
}
