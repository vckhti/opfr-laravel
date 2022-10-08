<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table = "printers";

    public $timestamps = false;

    protected $fillable = [
        'KabinetNumber',
        'Model',
        'INV',
        'Addres'
    ];
    use HasFactory;
}
