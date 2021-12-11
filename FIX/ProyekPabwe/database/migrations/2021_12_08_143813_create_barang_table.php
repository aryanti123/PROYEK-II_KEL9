<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_item');
            $table->enum('lostandfound', ['lost', 'found']);
            $table->enum('status', ['Claimed', 'NotClaimed']);
            $table->date('date');
            $table->string('place');
            $table->string('description');
            $table->string('founderorowner');
            $table->binary('picture');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_users')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
