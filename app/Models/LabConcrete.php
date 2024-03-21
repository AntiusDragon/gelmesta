<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabConcrete extends Model
{
    use HasFactory;

    protected $fillable = [
        'pagaminti_kubeliai_g',
        'pagaminti_kubeliai_p',
        'slankumas_mm',
        // 'itraukto_oro_kiekis',
        'plotis_mm',
        'ilgis_mm',
        'aukstis_mm',
        'bandinio_mase_g',
        'ardancioji_jega_kn',
        'mixing_concrete_id',
        'user_id',
    ];

    public function mixingConcrete ()
    {
        // return $this->belongsToMany(MixingConcrete::class, 'mixing_lab_concretes');
        return $this->belongsTo(MixingConcrete::class);
    }
}
