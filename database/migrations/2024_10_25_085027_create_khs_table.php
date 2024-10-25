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
        Schema::create('khs', function (Blueprint $table) {
            $table->string('nim', 20);
            $table->string('kodemk', 10)->index('kodemk');
            $table->float('ipk')->nullable();
            $table->float('nilai')->nullable();
            $table->integer('bobot')->nullable();

            $table->primary(['nim', 'kodemk']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khs');
    }
};
