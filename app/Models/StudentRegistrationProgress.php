<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentRegistrationProgress extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'step_id',
        'registration_id',
        'score',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'step_id' => 'integer',
        'registration_id' => 'integer',
        'score' => 'float',
    ];

    public function step()
    {
        return $this->belongsTo(RecruitmentStep::class);
    }

    public function registration()
    {
        return $this->belongsTo(StudentRegistration::class);
    }
}
