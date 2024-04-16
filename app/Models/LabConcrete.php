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
        // 'created_at',
    ];

    protected static $sorts = [
        'no_sort' => 'Nerūšiuota',
        'created_at_asc' => 'Data (didėjimo tvarka)',
        'created_at_desc' => 'Data (mažėjimo tvarka)',
    ];

    protected static $perPageSelect = [
        // 0 => 'Visi',
        2 => 2,
        5 => 5,
        15 => 15,
        50 => 50,
        100 => 100,
    ];

    public static function getSorts()
    {
        return self::$sorts;
    }

    public function mixingConcrete ()
    {
        // return $this->belongsToMany(MixingConcrete::class, 'mixing_lab_concretes');
        return $this->belongsTo(MixingConcrete::class);
    }

    // public static function getPerPageSelect()
    // {
    //     return self::$perPageSelect;
    // }
}
