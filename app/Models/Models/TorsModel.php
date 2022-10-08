<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TorsModel extends Model
{
    protected $table = "tors";

    public $timestamps = false;

    protected $fillable = [
        'kename',
        'description',
        'type',
        'responsabile',
        'OPFR',
        'region',
        'city',
        'address',
        'manufacturer',
        'model',
        'sn',
        'inv',
        'toactive',
        'sreda',
        'status',
        'garanydatestart',
        'garanydateend',
        'KabinetNumber',
        'id'
    ];

    use HasFactory;
}
