<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table='customer_details';


    protected $fillable=[
        'name',
        'email',
        'gender',
        'mobile_no',
        'city',
        'state',
       'country'
    ];
    
}
