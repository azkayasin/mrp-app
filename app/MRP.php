<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MRP extends Model
{
    protected $table = 'mrp';
    protected $primaryKey='id';
    public $incrementing = false;

    protected $guarded = [];

    public function pegawai()
    {
    	return $this->belongsTo('App\Pegawai');
    }

    public function skstg()
    {
    	return $this->hasOne('App\SKSTg', 'mrp_id');
    }

    public function formasi_jabatan()
    {
    	return $this->belongsTo('App\FormasiJabatan');
    }

    public function personnel_area_pengusul()
    {
        return $this->belongsTo('App\PersonnelArea', 'unit_pengusul');
    }

    public function getTglPoolingAttribute($value)
    {
        return \Carbon\Carbon::parse($value);
    }

    public function getTglDokumenMutasiAttribute($value)
    {
        return \Carbon\Carbon::parse($value);
    }
}
