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
        Schema::create('siasn_perencanaan_formasi_k2', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('nama')->nullable();
            $table->string('jabatan')->nullable()->index('2_jabatan');
            $table->string('jenjang_pendidikan')->nullable()->index('2_jenjang_pendidikan');
            $table->string('jenjang_pendidikan_terakhir')->nullable()->index('2_jenjang_pendidikan_terakhir');
            $table->string('jenis_jabatan_umum')->nullable()->index('2_jenis_jabatan_umum');
            $table->string('nama_jabatan')->nullable()->index('2_nama_jabatan');
            $table->string('unit_kerja')->nullable()->index('2_unit_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_perencanaan_formasi_k2');
    }
};
