<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public function payments()
    {
        return $this->hasMany(Payment::class, 'booking_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    use HasFactory;
    protected $fillable=[
        'tripName',
        'tripPrice',

        'tripDate',

        'tripnumAdults',
        'userName',
        'userEmail',



        
    ];
}
