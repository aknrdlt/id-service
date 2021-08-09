<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfServices extends Model
{
    use HasFactory;

    protected $fillable = [
        'word_en',
        'word_ru',
        'word_ch'
    ];
}
