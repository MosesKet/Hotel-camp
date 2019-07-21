<?php

namespace App;

use Rinvex\Bookings\Traits\Bookable;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
	//use Bookable;
	
    protected $guarded = [];
	
	public function images()
	{
		return $this->hasMany(Image::class);
	}
}
