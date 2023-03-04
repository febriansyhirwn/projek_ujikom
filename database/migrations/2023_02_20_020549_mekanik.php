<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mekanik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mekanik', function (Blueprint $table) {
            $table->id();
            $table->text('nama', 45);
            $table->string('alamat');
            $table->enum('statusaktivitas', ['1', '0']);
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
