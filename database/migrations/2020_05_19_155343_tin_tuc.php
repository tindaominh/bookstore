<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TinTuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_tin_tuc', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('tieu_de_tin', 255);
            $table->text('noi_dung_tom_tat');
            $table->text('noi_dung_chi_tiet');
            $table->tinyInteger('trang_thai');
            $table->string('hinh_dai_dien', 255);
            $table->unsignedBigInteger('id_loai_tin_tuc');
            $table->date('ngay_dang');

            //forign
            $table->foreign('id_loai_tin_tuc')
            ->references('id')->on('bs_loai_tin_tuc')->onDelete('cascade');
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
