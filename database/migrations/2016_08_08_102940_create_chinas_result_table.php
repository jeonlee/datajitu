<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChinasResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chinas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('periode');
            $table->text('number');
            $table->text('tanggal');
            $table->text('hari');
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
        Schema::drop('chinas');
    }
}
