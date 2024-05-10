<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id',
        'student_id',
        'student_grade',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'student_id' => 'integer',
        'student_grade' => 'float',
    ];

    public function course()
    {
        return $this->belongsTo(CampusCourse::class);
    }

    public function student()
    {
        return $this->belongsTo(\App\Models\Students::class);
    }
}
