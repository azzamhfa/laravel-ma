<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigGenreList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GENRE_LIST', function (Blueprint $table) {
            $table->foreignId('id_genre');
            $table->foreignId('id_film');
            $table->foreign('id_genre')->references('id_genre')->on('GENRES');
            $table->foreign('id_film')->references('id_film')->on('FILM');
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
