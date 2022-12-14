<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    
    public function CompanyCategory(){
        return $this->hasMany(Company::class);
    }
}