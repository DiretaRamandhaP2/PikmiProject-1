<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['warga_id', 'jenis_sampah_id', 'berat', 'total', 'tanggal'];

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }

    public function jenisSampah()
    {
        return $this->belongsTo(JenisSampah::class);
    }
}
