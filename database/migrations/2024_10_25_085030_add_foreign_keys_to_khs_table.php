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
        Schema::table('khs', function (Blueprint $table) {
            $table->foreign(['nim'], 'khs_ibfk_1')->references(['nim'])->on('mahasiswa')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['kodemk'], 'khs_ibfk_2')->references(['kodemk'])->on('mata_kuliah')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('khs', function (Blueprint $table) {
            $table->dropForeign('khs_ibfk_1');
            $table->dropForeign('khs_ibfk_2');
        });
    }
};
