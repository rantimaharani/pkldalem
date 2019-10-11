<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KartuPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('peminjams_id');
            $table->foreign('peminjams_id')->references('id')->on('peminjams')->onDelete('cascade');
            $table->unsignedBigInteger('petugas_id');
            $table->foreign('petugas_id')->references('id')->on('petugas')->onDelete('cascade');
            $table->bigInteger('kartu_barkode');
            $table->bigInteger('petugas_kode');
            $table->bigInteger('peminjam_kode');
            $table->date('kartu_tgl_pembuatan');
            $table->date('kartu_tgl_akhir');
            $table->string('kartu_status_aktif');
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
        Schema::dropIfExists('kartu_pendaftaran');
    }
}
