<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabConcrete extends Model
{
    use HasFactory;

    protected $fillable = [
        'slankumas_mm',
        'itraukto_oro_kiekis',
        'plotis_mm',
        'ilgis_mm',
        'aukstis_mm',
        'bandinio_mase_g',
        'ardancioji_jega_kn',
    ];
}
