<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'registration_number',
        'email',
        'address',
        'description',
        'logo',
        'company_categories_id',
    ];
    public function category(){
        return $this->belongsTo(CompanyCategory::class,"company_categories_id");
    }

}
