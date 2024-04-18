<?php

namespace Kanekescom\Siasn\Perencanaan\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormasiK2 extends Model
{
    use HasFactory;
    use HasUlids;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getTable()
    {
        return 'siasn_perencanaan_'.str(class_basename(__CLASS__))->snake();
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

    public function scopeUnitKerjaOptions($query)
    {
        return $query
            ->distinct('unit_kerja')
            ->select('unit_kerja')
            ->orderBy('unit_kerja', 'asc')
            ->pluck('unit_kerja', 'unit_kerja');
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

    public function scopeUnitPenempatanOptions($query)
    {
        return $query
            ->distinct('unit_kerja')
            ->select('unit_kerja')
            ->orderBy('unit_kerja', 'asc')
            ->pluck('unit_kerja', 'unit_kerja');
    }

    public function scopeJabatanOptions($query)
    {
        return $query
            ->distinct('jabatan')
            ->select('jabatan')
            ->orderBy('jabatan', 'asc')
            ->pluck('jabatan', 'jabatan');
    }

    public function scopeJenjangPendidikanOptions($query)
    {
        return $query
            ->distinct('jenjang_pendidikan')
            ->select('jenjang_pendidikan')
            ->orderBy('jenjang_pendidikan', 'asc')
            ->pluck('jenjang_pendidikan', 'jenjang_pendidikan');
    }

    public function scopeJenjangPendidikanTerkhirOptions($query)
    {
        return $query
            ->distinct('jenjang_pendidikan_terakhir')
            ->select('jenjang_pendidikan_terakhir')
            ->orderBy('jenjang_pendidikan_terakhir', 'asc')
            ->pluck('jenjang_pendidikan_terakhir', 'jenjang_pendidikan_terakhir');
    }
}
