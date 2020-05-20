<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TacGia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_tac_gia', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('ten_tac_gia', 255);
            $table->date('ngay_sinh');
            $table->text('gioi_thieu');
            $table->string('hinh', 255);
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
