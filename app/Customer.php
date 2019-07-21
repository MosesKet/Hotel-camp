<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\HasBookings;

class Customer extends Model
{
	//use HasBookings;
	
	//protected $fillable = ['name', 'surname','email', 'phone', 'email_verified_at', 'password', 'address', 'city, 'country'];
    
	protected $guarded = [];
	
}
