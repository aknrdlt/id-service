<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contact';
    protected $fillable = [
        'facebook',
        'instagram',
        'youtube',
        'phone_1',
        'phone_2',
        'website',
        'address_en',
        'address_ru',
        'address_ch'
    ];
}
