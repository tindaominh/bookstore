<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsTacGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_tac_gia', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_tac_gia')->nullable();
            $table->date('ngay_sinh')->nullable();
            $table->text('gioi_thieu')->nullable();
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
        Schema::dropIfExists('bs_tac_gia');
    }
}
