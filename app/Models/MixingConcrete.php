<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MixingConcrete extends Model
{
    use HasFactory;

    protected $fillable = [
        'delete',
        'maisikles_id',
        'maisikles_recepto_id',
        'user_maise_id',
        'user_edit_id',
        'marke',
        'slankumo_klase',
        'slankumas_mm',
        'itraukto_oro_kiekis',
        'tipas',
        'salcio_priedai',
        'pagaminti_kubeliai_g',
        'pagaminti_kubeliai_p',
        'maisykle',
        'kiekis_m3',
        'uzsakymo_nr',
        'uzsakymo_raide',
        'uzsakovas',
        'komentaras',
        'user_id',
        'created_at',
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

    public function labConcrete()
    {
        // return $this->belongsToMany(MixingConcrete::class, 'mixing_lab_concrete');
        return $this->hasMany(LabConcrete::class);
    }

}
