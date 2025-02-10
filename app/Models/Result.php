<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    // Allow mass assignment for the result attributes
    protected $fillable = ['student_id', 'subject_id', 'score', 'term'];

    /**
     * Relationship: A result belongs to a student.
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    /**
     * Relationship: A result belongs to a subject.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
