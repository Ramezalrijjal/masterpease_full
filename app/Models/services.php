<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    public static function getservicesData($id)
    {
        return self::findOrFail($id, ['name', 'email']);
    }
}
