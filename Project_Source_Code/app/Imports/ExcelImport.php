<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExcelImport implements ToModel,  WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'Area'     => $row['Area'],
            'Territory'    => $row['Territory'],
            'DBCode'     => $row['DBCode'],
            'DBName'    => $row['DBName'],
            'OutletCode'     => $row['OutletCode'],
            'SKUName'    => $row['SKUName'],
            'Pcs'     => $row['Pcs'],
            'Value'    => $row['Value'],
            'OutletName'     => $row['OutletName'],
            'DHCPName'    => $row['DHCPName'],
            'Address'     => $row['Address'],
            'ContactNumber'    => $row['ContactNumber'],
            'Brand'     => $row['Brand'],
            'Month'    => $row['Month']
        ]);
    }
}
