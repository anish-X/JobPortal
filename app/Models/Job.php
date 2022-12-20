<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, softDeletes;


    protected $fillable = [
        'experience',
        'skills',
        'title',
        'salary',
        'vacancy',
        'description',
        'deadline',
        'company_id',
        'job_category_id'

    ];

    public function category()
    {
        return $this->hasMany(JobCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
