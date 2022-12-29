<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanySubscription extends Model
{
    use HasFactory;
    protected $fillable = [
      'company_id',
      'subscription_id',


    ];
public function company(){
    return $this->belongsTo(Company::class);
}
public function subscription(){
    return $this->belongsTo(Subscription::class);
}


}
