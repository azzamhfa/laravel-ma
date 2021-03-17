<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigFilmStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FILM_STOCK', function (Blueprint $table) {
            $table->id('id_stock');
            $table->string('judul_s',50);
            $table->text('poster',50);
            $table->integer('harga');
            $table->string('tersedia',15);
            $table->foreignId('film_id');
            $table->foreign('film_id')->references('id_film')->on('FILM');
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
