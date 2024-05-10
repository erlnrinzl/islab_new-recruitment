<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id',
        'detail_id',
        'status_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'student_id' => 'integer',
        'detail_id' => 'integer',
        'status_id' => 'integer',
    ];

    public function studentRegistrationProgresses()
    {
        return $this->hasMany(StudentRegistrationProgress::class);
    }

    public function student()
    {
        return $this->belongsTo(\App\Models\Students::class);
    }

    public function detail()
    {
        return $this->belongsTo(RecruitmentDetail::class);
    }

    public function status()
    {
        return $this->belongsTo(StudentRegistrationStatus::class);
    }
}
