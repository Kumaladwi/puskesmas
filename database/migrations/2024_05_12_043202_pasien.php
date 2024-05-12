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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table-> unsignedBigInteger('dokter_id');
            $table->foreign('dokter_id')->references('id')->on('dokter');
            $table-> unsignedBigInteger('perawat_id');
            $table->foreign('perawat_id')->references('id')->on('perawat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
