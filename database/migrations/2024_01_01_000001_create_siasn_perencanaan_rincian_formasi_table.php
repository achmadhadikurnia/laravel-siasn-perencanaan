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
        Schema::create('siasn_perencanaan_rincian_formasi', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('jenis_pengadaan')->nullable()->index('1_jenis_pengadaan');
            $table->string('jenis_jabatan_umum')->nullable()->index('1_jenis_jabatan_umum');
            $table->string('nama_jabatan')->nullable()->index('1_nama_jabatan');
            $table->string('nama_sub_jabatan')->nullable()->index('1_nama_sub_jabatan');
            $table->unsignedSmallInteger('cpns_guru')->nullable();
            $table->unsignedSmallInteger('cpns_nakes')->nullable();
            $table->unsignedSmallInteger('cpns_teknis')->nullable();
            $table->unsignedSmallInteger('pppk_guru')->nullable();
            $table->unsignedSmallInteger('pppk_nakes')->nullable();
            $table->unsignedSmallInteger('pppk_teknis')->nullable();
            $table->text('unit_penempatan')->nullable();
            $table->text('unit_penempatan_cleaned')->nullable();
            $table->unsignedInteger('penghasilan_min')->nullable();
            $table->unsignedInteger('penghasilan_max')->nullable();
            $table->text('pendidikan_id')->nullable();
            $table->json('pendidikan_id_json')->nullable();
            $table->text('pendidikan_nama')->nullable();
            $table->json('pendidikan_nama_json')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siasn_perencanaan_rincian_formasi');
    }
};
