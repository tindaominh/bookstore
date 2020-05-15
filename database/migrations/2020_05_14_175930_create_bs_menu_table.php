<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBsMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieu_de')->nullable();
            $table->string('alias')->nullable();
            $table->tinyInteger('trang_thai')->nullable();
            $table->integer('menu_cha')->nullable();
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
        Schema::dropIfExists('bs_menu');
    }
}
