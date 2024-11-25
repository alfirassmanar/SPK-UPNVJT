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
        Schema::create('tkriteria', function (Blueprint $table) {
            $table->id('idKriteria');
            $table->string('namaKriteria');
            $table->enum('jenis', ['Benefit', 'Cost']); // Jika hanya ada 2 jenis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tkriteria');
    }
};
