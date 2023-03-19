<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'fullname',
        'company',
        'phone_number',
        'email',
        'birthday',
        'photo'
    ];
}
