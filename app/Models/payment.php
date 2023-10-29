<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
    
    use HasFactory;
}
