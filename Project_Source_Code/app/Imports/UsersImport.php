<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'Region'  => $row[0],
            'Area' => $row[1],
            'Territory' => $row[2],
            'DBCode' => $row[3],
            'DBName' => $row[4],
            'RouteCode' => $row[5],
            'Route' => $row[6],
            'SRCode' => $row[7],
            'SR' => $row[8],
            'Channel' => $row[9],
            'OutletCode' => $row[10],
            'OutletName' => $row[11],
            'SKUCode' => $row[12],
            'SKUName' => $row[13],
            'Pcs' => $row[14],
            'Value' => $row[15],
        ]);
    }
}
