<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_baju', function (Blueprint $table) {
            $table->increments('id_baju');
            $table->string('nama_baju', 25);
            $table->string('ukuran_baju', 100);
            $table->string('harga_baju', 256);
            $table->string('warna_baju', 256);
            $table->string('desc_baju', 256);
            $table->string('id_type_baju', 256);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_baju');
    }
};
