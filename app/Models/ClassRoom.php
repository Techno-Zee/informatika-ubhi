<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    /** @use HasFactory<\Database\Factories\ClassRoomFactory> */
    use HasFactory;

    protected $fillable = ['name', 'capacity', 'school_year'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
