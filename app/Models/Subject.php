<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code'];

    /**
     * Relationship: A subject can have many results.
     */
    public function results()
    {
        return $this->hasMany(Result::class);
    }

    /**
     * Relationship: A subject can have many teachers (if applicable).
     */
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'subject_teacher')->withTimestamps();
    }
}
