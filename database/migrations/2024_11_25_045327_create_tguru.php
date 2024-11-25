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
        Schema::create('tguru', function (Blueprint $table) {
            $table->id('idGuru');
            $table->string('nim')->unique();
            $table->string('namaGuru');
            $table->string('nTelp');
            $table->text('alamat');
            $table->string('instansi_mengajar');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tguru');
    }
};
