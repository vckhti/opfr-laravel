<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrinterModel extends Model
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
