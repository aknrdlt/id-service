<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowWeWork extends Model
{
    use HasFactory;

    protected $table = 'how_we_work';

    protected $fillable = [
        'word_en',
        'word_ru',
        'word_ch'
    ];
}
