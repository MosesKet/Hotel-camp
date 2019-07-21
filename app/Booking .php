<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Bookings\Traits\HasBookings;

class Booking extends BookableBooking
{
    protected $table = 'bookable_bookings';
}