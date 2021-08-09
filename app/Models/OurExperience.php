<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurExperience extends Model
{
    use HasFactory;

    protected $table = 'our_experience';

    protected $fillable = [
        'word_en',
        'word_ru',
        'word_ch'
    ];

}
