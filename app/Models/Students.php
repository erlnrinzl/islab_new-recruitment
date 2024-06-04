<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'nim',
        'user_id',
        'major_id',
        'region_id',
        'streamcourse_id',
        'name',
        'domicile',
        'phone',
        'active_status',
        'gpa',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'major_id' => 'integer',
        'region_id' => 'integer',
        'streamcourse_id' => 'integer',
        'active_status' => 'boolean',
        'gpa' => 'float',
    ];

    public function studentRegistrations()
    {
        return $this->hasMany(StudentRegistration::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function major()
    {
        return $this->belongsTo(CampusMajor::class);
    }

    public function region()
    {
        return $this->belongsTo(CampusRegion::class);
    }

    public function streamcourse()
    {
        return $this->belongsTo(CampusStreamCourse::class);
    }
}
