<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentScoreRequirement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_id',
        'detail_id',
        'course_score_min',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'detail_id' => 'integer',
        'course_score_min' => 'float',
    ];

    public function course()
    {
        return $this->belongsTo(CampusCourse::class);
    }

    public function detail()
    {
        return $this->belongsTo(RecruitmentDetail::class);
    }
}
