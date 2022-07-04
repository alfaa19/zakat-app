<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayarzakat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kk');
            $table->enum('jenis_bayar',['Beras','Uang']);
            $table->integer('jumlah_tanggungandibayar');
            $table->integer('bayar_beras');
            $table->integer('bayar_uang');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayarzakat');
    }
};
