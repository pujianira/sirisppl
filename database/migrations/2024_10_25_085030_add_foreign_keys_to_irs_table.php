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
        Schema::table('irs', function (Blueprint $table) {
            $table->foreign(['nim'], 'irs_ibfk_1')->references(['nim'])->on('mahasiswa')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['kodemk'], 'irs_ibfk_2')->references(['kodemk'])->on('mata_kuliah')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_jadwal'], 'irs_ibfk_3')->references(['id_jadwal'])->on('jadwal_kuliah')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('irs', function (Blueprint $table) {
            $table->dropForeign('irs_ibfk_1');
            $table->dropForeign('irs_ibfk_2');
            $table->dropForeign('irs_ibfk_3');
        });
    }
};
