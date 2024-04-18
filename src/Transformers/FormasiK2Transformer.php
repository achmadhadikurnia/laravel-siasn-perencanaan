<?php

namespace Kanekescom\Siasn\Perencanaan\Transformers;

use League\Fractal\TransformerAbstract;

class FormasiK2Transformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(array $item)
    {
        $item['jenis_jabatan_umum'] = str($item['jenis_jabatan_umum'])->upper();
        $item['nama_jabatan'] = str($item['nama_jabatan'])->upper();

        return $item;
    }
}
