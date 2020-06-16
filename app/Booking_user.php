<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_user extends Model
{
    protected $table = 'booking_user';

    protected $fillable = ['id_paket', 'id_user', 'Total', 'check_in', 'check_out'];
}
