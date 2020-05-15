<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_tin_tuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieu_de_tin')->nullable();
            $table->text('noi_dung_tom_tat')->nullable();
            $table->text('noi_dung_chi_tiet')->nullable();
            $table->tinyInteger('trang_thai')->nullable();
            $table->string('hinh_dai_dien')->nullable();
            $table->integer('id_loai_tin_tuc')->nullable();
            $table->dateTime('ngay_dang')->nullable();
            $table->timestamps();

            // $table->foreign('id_loai_tin_tuc')->references('id')->on('loai_tin_tuc')->onUpdate('RESTRICT')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bs_tin_tuc');
    }
}
