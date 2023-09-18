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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('rt_id');
            $table->string('keperluan')->nullable();
            $table->string('jenis_surat')->nullable();
            $table->string('tinggal')->nullable();
            $table->string('bidang_usaha')->nullable();
            $table->string('nama_usaha')->nullable();
            $table->date('tanggal_kematian')->nullable();
            $table->time('jam_kematian')->nullable();
            $table->string('tempat_kematian')->nullable();
            $table->string('penyebab_kematian')->nullable();
            $table->string('tempat_dimakamkan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('jenis_cerai')->nullable();
            $table->string('nama_pasangan')->nullable();
            $table->string('status')->default('Diproses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
