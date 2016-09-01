<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHongkongResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hongkongs', function (Blueprint $table) {
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
        Schema::drop('hongkongs');
    }
}
