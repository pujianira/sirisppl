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
        Schema::create('irs', function (Blueprint $table) {
            $table->string('nim', 20);
            $table->string('kodemk', 10)->index('kodemk');
            $table->string('nama_mk', 100)->nullable();
            $table->string('id_jadwal', 20)->nullable()->index('id_jadwal');
            $table->string('nama_dosen', 100)->nullable();

            $table->primary(['nim', 'kodemk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('irs');
    }
};
