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
        'address',
        'description',
        'logo'
    ];  
    public function company(){
        return $this->belongsTo(Company::class);
    }

}
