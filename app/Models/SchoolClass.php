<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    use HasFactory;

    // Allow mass assignment for the `name` attribute
    protected $fillable = ['name'];

    /**
     * Relationship: A class has many students.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Relationship: A class has many timetable entries.
     */
    public function timetables()
    {
        return $this->hasMany(Timetable::class);
    }

    /**
     * Relationship: A class may have one teacher.
     */
    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'class_id');
    }
}
