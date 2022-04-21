<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'max_capability',
        'link',
        'image',
        'description',
        'user_id'
    ];
}
