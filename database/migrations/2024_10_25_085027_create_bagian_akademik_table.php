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
        Schema::create('bagian_akademik', function (Blueprint $table) {
            $table->string('nip', 20)->primary();
            $table->string('nama', 100)->nullable();
            $table->string('no_telp', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('id_prodi', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bagian_akademik');
    }
};
