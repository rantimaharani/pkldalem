<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Penerbits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penerbits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('penerbit_nama');
            $table->string('penerbit_alamat');
            $table->bigInteger('penerbit_telp');
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
        Schema::dropIfExists('penerbits');
    }
}
