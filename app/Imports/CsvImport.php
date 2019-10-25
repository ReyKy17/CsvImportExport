<?php

namespace App\Imports;

use App\BJBS;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new BJBS([
            'nomor_urut'      =>  $row['0'],
            'tanggal'     =>  $row['1'],
            'kode'  =>  $row['2'],
            'keterangan'  =>  $row['3'],
            'no_bukti'  =>  $row['4'],
            'mutasi_debit'  =>  $row['5'],
            'mutasi_kredit'  =>  $row['6'],
            'saldo'  =>  $row['7'],
            'kode_rekening'  =>  $row['8'],
        ]);
    }
}
