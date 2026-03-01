<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    /** @use HasFactory<\Database\Factories\LecturerFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'lecturer_number', 'position'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
