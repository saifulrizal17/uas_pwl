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
        Schema::create('laundry', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->BigInteger('nomerhp');
            $table->integer('berat');
            $table->integer('jenis_paket');
            $table->integer('total_harga');
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
        Schema::dropIfExists('laundry');
    }
};
