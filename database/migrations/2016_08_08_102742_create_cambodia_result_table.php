<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCambodiaResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambodias', function (Blueprint $table) {
            $table->increments('id');
            $table->text('periode');
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
        Schema::drop('cambodias');
    }
}
