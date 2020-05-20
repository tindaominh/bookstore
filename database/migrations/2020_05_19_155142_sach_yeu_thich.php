<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SachYeuThich extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_sach_yeu_thich', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_nguoi_dung');
            $table->unsignedBigInteger('id_sach');

            //forign
            $table->foreign('id_nguoi_dung')
            ->references('id')->on('bs_nguoi_dung');
            $table->foreign('id_sach')
            ->references('id')->on('bs_sach');
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
