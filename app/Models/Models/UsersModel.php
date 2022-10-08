<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = "user";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'email',
        'createdAt',
        'updatedAt',
        'username',
        'bio',
        'image',
        'token',
        'password'
    ];

    use HasFactory;
}
