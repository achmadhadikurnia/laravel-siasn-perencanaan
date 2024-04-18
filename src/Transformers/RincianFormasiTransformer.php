<?php

namespace Kanekescom\Siasn\Perencanaan\Transformers;

use League\Fractal\TransformerAbstract;

class RincianFormasiTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(array $item)
    {
        $item['unit_penempatan_cleaned'] = $this->unit_penempatan_cleander($item['unit_penempatan']);
        $item['pendidikan_id_json'] = $this->pendidikan_exploder($item['pendidikan_id']);
        $item['pendidikan_nama_json'] = $this->pendidikan_exploder($item['pendidikan_nama']);

        return $item;
    }

    private function unit_penempatan_cleander($string)
    {
        return str($string)->replaceStart(config('siasn-perencanaan.unit_penempatan_string_removal'), '');
    }

    private function pendidikan_exploder($string)
    {
        return json_encode(explode(' / ', $string));
    }
}
