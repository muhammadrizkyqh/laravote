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
        Schema::create('candidate', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique(); // Nama kandidat, harus unik
            $table->string('nim')->unique(); // NIM kandidat, harus unik
            $table->string('visi'); // Visi kandidat
            $table->text('misi'); // Misi kandidat
            $table->string('gambar')->nullable(); // Nama file gambar
            $table->unsignedBigInteger('selected_by')->nullable(); // ID pengguna yang memilih kandidat ini
            $table->timestamps(); // Kolom created_at dan updated_at

            $table->index('nama'); // Indeks untuk kolom nama
            $table->index('nim'); // Indeks untuk kolom nim
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate');
    }
};
