<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MixingLabConcrete extends Model
{
    use HasFactory;

    protected $fillable = [
        'mixingconcrete_id',
        'labconcrete_id',
    ];

    public $timestamps = false;
}