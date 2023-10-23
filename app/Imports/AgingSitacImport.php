<?php

namespace App\Imports;

use App\Models\Aging\AgingSitac;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AgingSitacImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AgingSitac([
            'sub_type'    => $row['sub_type'], 
            'cust'    => $row['cust'], 
            'nama_site'    => $row['nama_site'], 
            'nilai_so'    => $row['nilai_so'], 
            'pic'    => $row['pic'], 
            'progres'    => $row['progres'], 
            'target_aging'    => $row['target_aging'], 
            'realisasi'    => $row['realisasi'], 
        ]);
    }
}
