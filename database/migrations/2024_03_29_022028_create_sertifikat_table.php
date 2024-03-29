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
        Schema::create('sertifikat', function (Blueprint $table) {
            $table->id();
            $table->string('jenis');
            $table->foreignId('pemilik_id')->constrained('pemilik')->cascadeOnDelete();
            $table->string('nomor');
            $table->foreignId('kompetensi_id')->nullable()->constrained('kompetensi')->cascadeOnDelete();
            $table->json('unit')->nullable();
            $table->date('tanggal_terbit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sertifikat');
    }
};
