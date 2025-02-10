<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    // Define fillable fields to allow mass assignment
    protected $fillable = ['name', 'email', 'subject_id', 'class_id'];

    /**
     * Relationship: A teacher belongs to a subject.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Relationship: A teacher belongs to a class.
     */
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    /**
     * Relationship: A teacher can manage multiple timetables.
     */
    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }
}
