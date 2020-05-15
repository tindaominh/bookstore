<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsSachYeuThichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_sach_yeu_thich', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_nguoi_dung')->nullable();
            $table->string('id_sach')->nullable();
            $table->timestamps();

            // $table->foreign('id_nguoi_dung')->references('id')->on('nguoi_dung')->onUpdate('RESTRICT')->onDelete('cascade');
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
        Schema::dropIfExists('bs_sach_yeu_thich');
    }
}
