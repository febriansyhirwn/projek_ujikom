<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kerusakan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerusakan', function (Blueprint $table) {
            $table->id();
            $table->enum('jnskendaraan',['mobil','motor']);
            $table->string('tipekendaraan');
            $table->string('tahunkendaraan');
            $table->string('fotokendaraan');
            $table->foreignId('idmember');
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