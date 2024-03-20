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
        // 'edit_data',
        // 'maisimo_data',
        'marke',
        'slankumo_klase',
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
        // 'user_id',
    ];
}
