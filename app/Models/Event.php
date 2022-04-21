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
        'user_id',
        'isImportant'
    ];

    public function isAssistable()
    {
        return $this->tickets()->count() < $this->max_capability;
    }

    public function isRegistered(User $user){
        return $this->tickets()->where('user_id', $user->id)->exists();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
