<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'rate',
        'duration',

    ];
    public function companysubscription(){
        return $this->hasMany(CompanySubscription::class);


    }
}
