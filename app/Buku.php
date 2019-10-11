<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'id_kategori','id_penerbit',
        'buku_judul','buku_jumhal','buku_deskripsi',
        'buku_pengarang','buku_tahun_terbit'
        ];
    
        protected $timestamps = true;
    
        public function kategori()
        {
            return $this->belongsTo('App/Kategori','id_kategori');
        }
    
        public function penerbit()
        {
            return $this->belongsTo('App/Penerbit','id_penerbit');
        }
}
