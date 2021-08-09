<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;

    protected $table = 'about_company';

    protected $fillable = [
        'word_en',
        'word_ru',
        'word_ch'
    ];
}
