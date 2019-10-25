<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BJBS extends Model
{
    protected $fillable = [
        'nomor_urut',
        'tanggal',
        'kode',
        'keterangan',
        'no_bukti',
        'mutasi_debit',
        'mutasi_kredit',
        'saldo',
        'kode_rekening',
    ];
}
