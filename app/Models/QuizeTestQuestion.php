<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizeTestQuestion extends Model
{
    use HasFactory;
    protected $fillable= ['id_quize', 'question', 'answer', 'answerTrue'];
}
