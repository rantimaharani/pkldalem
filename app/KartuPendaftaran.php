<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KartuPendaftaran extends Model
{
    protected $fillable = ['']; 
    protected $timestamps = true;
    
    public function nama_relasi(){
        return $this->budakatawabapak('App/nama_model','nama_id_darimodel_tersebut');
    }
}
