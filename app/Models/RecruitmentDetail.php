<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruitmentDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id',
        'period_id',
        'batch',
        'date_start',
        'date_end',
        'major_id',
        'binusian',
        'gpa_required',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_id' => 'integer',
        'period_id' => 'integer',
        'date_start' => 'date',
        'date_end' => 'date',
        'major_id' => 'integer',
        'gpa_required' => 'float',
    ];

    public function recruitmentSteps()
    {
        return $this->hasMany(RecruitmentStep::class);
    }

    public function recruitmentScoreRequirements()
    {
        return $this->hasMany(RecruitmentScoreRequirement::class);
    }

    public function type()
    {
        return $this->belongsTo(RecruitmentType::class);
    }

    public function period()
    {
        return $this->belongsTo(RecruitmentPeriod::class);
    }

    public function major()
    {
        return $this->belongsTo(CampusMajor::class);
    }
}
