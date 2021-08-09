<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomePage extends Model
{
    use HasFactory;

    protected $table = 'welcome_page';

    protected $fillable = [
        'word_en',
        'word_ru',
        'word_ch'
    ];
}
