<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience',
        'skills',
        'deadline',
        'salary',
        'vacancy',
        'description'

    ];

    public function category(){
        return $this->belongsTo(JobCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
