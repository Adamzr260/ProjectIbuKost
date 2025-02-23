<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penghuni');
            $table->string('no_telp', 15);
            $table->integer('tagihan');
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_sewa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kamars');
    }
};

