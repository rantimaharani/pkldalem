<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable = ['id_petugas','id_peminjam','peminjam_tgl','peminjam_tgl_hrs_kembali'];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->belongsTo('App\Peminjaman','id_peminjaman');
    }

    public function peminjam()
    {
        return $this->belongsTo('App\Peminjam','id_peminjam');
    }
}
