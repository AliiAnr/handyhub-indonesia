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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('Foto');
            $table->string('status')->default('blum di terima');
            $table->string('id_customer');
            $table->string('id_kategori');
            $table->string('id_tukang')->nullable();
            $table->string('pesan');
            $table->string('waktu');
            $table->string('waktu_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
