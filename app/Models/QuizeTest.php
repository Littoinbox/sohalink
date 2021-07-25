<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizeTest extends Model
{
    use HasFactory;
    protected $fillable=['name ', 'image', 'description', 'introText', 'thirty_persent_right', 'fifty_persent_right', 'seventy_persent_right', 'hundred_right'];
}
