<?php

namespace Kanekescom\Siasn\Perencanaan\Imports;

use Illuminate\Support\Arr;
use Kanekescom\Siasn\Perencanaan\Models\RincianFormasi;
use Kanekescom\Siasn\Perencanaan\Transformers\RincianFormasiTransformer;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class RincianFormasiImport implements ToModel, WithChunkReading, WithHeadingRow, WithProgressBar
{
    use Importable;

    public function model(array $row)
    {
        $row = Arr::map($row, function ($value) {
            return $value === 'null' ? null : $value;
        });

        $row = fractal()
            ->item($row)
            ->transformWith(RincianFormasiTransformer::class)
            ->toArray()['data'];

        return RincianFormasi::create($row);
    }

    public function headingRow(): int
    {
        return 2;
    }

    public function chunkSize(): int
    {
        return config('siasn-perencanaan.chunk_data');
    }
}
