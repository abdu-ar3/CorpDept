<?php

namespace App\Imports;

use App\Models\KpiItem;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ItemKpiImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KpiItem([
            'event_id'    => $row['event_id'], 
            'department_id'    => $row['department_id'], 
            'area'    => $row['area'], 
            'kpi'    => $row['kpi'], 
            'calculation'    => $row['calculation'], 
            'target'    => $row['target'], 
            'realization'    => $row['realization'], 
            'weight'    => $row['weight'], 
        ]);
    }
}
