<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementStudent extends Model
{
    /** @use HasFactory<\Database\Factories\AchievementStudentFactory> */
    use HasFactory;

    public function achievement()
    {
        return $this->belongsTo(Achievement::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
