<?php

namespace Kanekescom\Siasn\Perencanaan\Imports;

use Illuminate\Support\Arr;
use Kanekescom\Siasn\Perencanaan\Models\FormasiK2;
use Kanekescom\Siasn\Perencanaan\Transformers\FormasiK2Transformer;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class FormasiK2Import implements ToModel, WithChunkReading, WithHeadingRow, WithProgressBar
{
    use Importable;

    public function model(array $row)
    {
        $row = Arr::map($row, function ($value) {
            return $value === 'null' ? null : $value;
        });

        $row = fractal()
            ->item($row)
            ->transformWith(FormasiK2Transformer::class)
            ->toArray()['data'];

        return FormasiK2::create($row);
    }

    public function chunkSize(): int
    {
        return config('siasn-perencanaan.chunk_data');
    }
}
