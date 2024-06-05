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
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('nim')->unique(); // NIM pengguna, harus unik
                $table->string('nama'); // Nama pengguna
                $table->string('role'); // Role pengguna (misalnya, 'admin' atau 'voter')
                $table->string('password'); // Password pengguna
                $table->timestamp('last_login_at')->nullable(); // Waktu login terakhir
                $table->rememberToken(); // Token untuk fitur "remember me"
                $table->timestamps(); // Kolom created_at dan updated_at

                $table->index('nama'); // Indeks untuk kolom nama
                $table->index('role'); // Indeks untuk kolom role
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
