<?php

namespace Kanekescom\Siasn\Perencanaan\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianFormasi extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $casts = [
        'pendidikan_nama_id' => 'json',
        'pendidikan_nama_json' => 'json',
    ];

    public function getTable()
    {
        return 'siasn_perencanaan_'.str(class_basename(__CLASS__))->snake();
    }

    public function scopeJenisPengadaanCpns($query)
    {
        return $query
            ->where('jenis_pengadaan', 'CPNS');
    }

    public function scopeJenisPengadaanPppk($query)
    {
        return $query
            ->where('jenis_pengadaan', 'PPPK');
    }

    public function scopeJenisJabatanUmumGuru($query)
    {
        return $query
            ->where('jenis_jabatan_umum', 'GURU');
    }

    public function scopeJenisJabatanUmumNakes($query)
    {
        return $query
            ->where('jenis_jabatan_umum', 'NAKES');
    }

    public function scopeJenisJabatanUmumTeknis($query)
    {
        return $query
            ->where('jenis_jabatan_umum', 'TEKNIS');
    }

    public function scopeJenisJabatanUmumOptions($query)
    {
        return $query
            ->distinct('jenis_jabatan_umum')
            ->select('jenis_jabatan_umum')
            ->orderBy('jenis_jabatan_umum', 'asc')
            ->pluck('jenis_jabatan_umum', 'jenis_jabatan_umum');
    }

    public function scopeNamaJabatanOptions($query)
    {
        return $query
            ->distinct('nama_jabatan')
            ->select('nama_jabatan')
            ->orderBy('nama_jabatan', 'asc')
            ->pluck('nama_jabatan', 'nama_jabatan');
    }

    public function scopeNamaSubJabatanOptions($query)
    {
        return $query
            ->distinct('nama_sub_jabatan')
            ->select('nama_sub_jabatan')
            ->orderBy('nama_sub_jabatan', 'asc')
            ->pluck('nama_sub_jabatan', 'nama_sub_jabatan');
    }

    public function scopeUnitPenempatanOptions($query)
    {
        return $query
            ->distinct('unit_penempatan')
            ->select('unit_penempatan')
            ->orderBy('unit_penempatan', 'asc')
            ->pluck('unit_penempatan', 'unit_penempatan');
    }

    public function scopeUnitPenempatanCleanedOptions($query)
    {
        return $query
            ->distinct('unit_penempatan_cleaned')
            ->select('unit_penempatan_cleaned')
            ->orderBy('unit_penempatan_cleaned', 'asc')
            ->pluck('unit_penempatan_cleaned', 'unit_penempatan_cleaned');
    }
}
