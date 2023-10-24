<?php

namespace App\Imports;

use App\Models\Aging\Aging;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AgingCalculateImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aging([
            'area_id'    => $row['area_id'], 
            'project'    => $row['project'], 
            'target'    => $row['target'],
            'jumlah_site'    => $row['jumlah_site'],
            'bobot'    => $row['bobot'],
            'tercapai'    => $row['tercapai'],
            'tidak_tercapai'    => $row['tidak_tercapai'],
            'persentase'    => $row['persentase'],
            'final'    => $row['final'],
        ]);
    }
}
