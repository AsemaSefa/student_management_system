<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    // Define fillable fields to allow mass assignment
    protected $fillable = ['day', 'time_slot', 'subject_id', 'teacher_id', 'class_id'];

    /**
     * Relationship: A timetable belongs to a subject.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Relationship: A timetable belongs to a teacher.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Relationship: A timetable belongs to a class.
     */
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
// The Timetable model has three relationships defined: