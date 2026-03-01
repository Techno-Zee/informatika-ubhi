<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterType extends Model
{
    /** @use HasFactory<\Database\Factories\LetterTypeFactory> */
    use HasFactory;

    protected $fillable = ['name', 'description', 'template_path'];

    public function letterRequests()
    {
        return $this->hasMany(LetterRequest::class);
    }
}
