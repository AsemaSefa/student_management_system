<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // Define fillable fields to allow mass assignment
    protected $fillable = ['name', 'email', 'class_id', 'profile_photo'];

    /**
     * Relationship: A student belongs to a class.
     */
    public function schoolClass()
    {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    /**
     * Relationship: A student can have multiple results.
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }

    /**
     * Relationship: A student has one timetable (through their class).
     */
    public function timetable()
    {
        return $this->hasOneThrough(Timetable::class, SchoolClass::class, 'id', 'class_id', 'class_id', 'id');
    }
}
