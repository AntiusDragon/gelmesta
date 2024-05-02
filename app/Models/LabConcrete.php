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
        // 'slankumas_mm',
        // 'itraukto_oro_kiekis',
        'plotis_mm',
        'ilgis_mm',
        'aukstis_mm',
        'bandinio_mase_g',
        'ardancioji_jega_kn',
        'komentaras',
        'mixing_concrete_id',
        'user_id',
        // 'created_at',
    ];

    protected static $sorts = [
        'no_sort' => 'Nerūšiuota',
        'created_at_asc' => 'Data (didėjimo tvarka)',
        'created_at_desc' => 'Data (mažėjimo tvarka)',
    ];

    protected static $perPageSelect = [
        // 0 => 'Visi',
        15 => 15,
        30 => 30,
        60 => 60,
        90 => 90,
        120 => 120,
    ];

    public static function getSorts()
    {
        return self::$sorts;
    }

    public static function getPerPageSelect()
    {
        return self::$perPageSelect;
    }

    public function mixingConcrete ()
    {
        // return $this->belongsToMany(MixingConcrete::class, 'mixing_lab_concretes');
        return $this->belongsTo(MixingConcrete::class);
    }

}
