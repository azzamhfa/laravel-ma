<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRANSAKSI', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->date('tgl_transaksi');
            $table->string('jenis_transaksi', 10);
            $table->smallInteger('lama_pinjam');
            $table->integer('biaya');
            $table->integer('denda');
            $table->foreignId('id_member');
            $table->foreignId('id_stock');
            $table->foreignId('id_kasir');
            $table->foreign('id_member')->references('id_member')->on('MEMBER');
            $table->foreign('id_stock')->references('id_stock')->on('FILM_STOCK');
            $table->foreign('id_kasir')->references('id_kasir')->on('KASIR');
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
