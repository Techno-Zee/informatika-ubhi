<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id', 'nim', 'photo_path', 'class_room_id', 'school_year',
        'gender', 'address', 'phone', 'status'
    ];

    protected $casts = [
        'gender' => 'string',
        'status' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'class_room_id');
    }

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'achievement_students')->withTimestamps();
    }

    public function letterRequests()
    {
        return $this->hasMany(LetterRequest::class);
    }
}
