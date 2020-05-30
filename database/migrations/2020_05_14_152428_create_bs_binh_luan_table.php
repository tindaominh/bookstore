<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsBinhLuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_binh_luan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nguoi_dung')->nullable();
            $table->text('noi_dung')->nullable();
            $table->string('email')->nullable();
            $table->string('hinh')->nullable();
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
        Schema::dropIfExists('bs_binh_luan');
    }
}
