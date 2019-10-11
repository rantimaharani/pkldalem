<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_kategori');
            $table->foreign('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->unsignedBigInteger('id_penerbit');
            $table->foreign('id_penerbit')->references('id')->on('penerbits')->onDelete('cascade');
            $table->string('buku_judul');
            $table->string('buku_jumhal');
            $table->string('buku_diskripsi');
            $table->string('buku_pengarang');
            $table->Integer('buku_tahun_terbit');
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
        Schema::dropIfExists('buku');
    }
}
