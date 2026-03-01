<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    /** @use HasFactory<\Database\Factories\AchievementFactory> */
    use HasFactory;

    protected $fillable = ['title', 'description', 'level', 'year', 'evidence_path'];

    protected $casts = [
        'level' => 'string',
        'year' => 'integer',
    ];

    public function students()
    {
        return $this->belongsToMany(Student::class, 'achievement_students')->withTimestamps();
    }
}
