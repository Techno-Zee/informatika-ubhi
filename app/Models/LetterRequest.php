<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterRequest extends Model
{
    /** @use HasFactory<\Database\Factories\LetterRequestFactory> */
    use HasFactory;

        protected $fillable = [
        'student_id', 'letter_type_id', 'purpose', 'attachment_path',
        'status', 'admin_notes', 'approved_by', 'approved_at'
    ];

    protected $casts = [
        'approved_at' => 'datetime',
        'status' => 'string',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function letterType()
    {
        return $this->belongsTo(LetterType::class);
    }

    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}
