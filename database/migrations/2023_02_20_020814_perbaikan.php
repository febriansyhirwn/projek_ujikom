<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perbaikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perbaikan', function (Blueprint $table) {
            $table->id();
            $table->datetime('tanggal');
            $table->enum('statusperbaikan',['pencarian','proses','selesai']);
            $table->enum('statuspembayaran',['belum bayar','sudah bayar']);
            $table->foreignId('idmekanik');
            $table->foreignId('idkerusakan');
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
        //
    }
}