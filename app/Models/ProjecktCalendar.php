<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjecktCalendar extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'date_start', 'description', 'place', 'image'];
}
