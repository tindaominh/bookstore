<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NhaXuatBan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_nha_xuat_ban', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('ten_nha_xuat_ban', 255);
            $table->string('dia_chi', 255);
            $table->string('dien_thoai', 255);
            $table->string('email', 255);
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
