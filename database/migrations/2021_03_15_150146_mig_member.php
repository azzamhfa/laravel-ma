<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MEMBER', function (Blueprint $table) {
            $table->id('id_member');
            $table->string('nama', 50);
            $table->string('kontak', 15);
            $table->string('alamat',50);
            $table->foreignId('id_info');
            $table->foreign('id_info')->references('id_info')->on('MEMBER_INFO');
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
