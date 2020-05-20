<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChiTietDonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_chi_tiet_don_hang', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_don_hang');
            $table->unsignedBigInteger('id_sach');
            $table->string('so_luong', 255);
            $table->string('don_gia', 255);
            $table->string('thanh_tien', 255);

            //forign
            $table->foreign('id_don_hang')
            ->references('id')->on('bs_don_hang');
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
