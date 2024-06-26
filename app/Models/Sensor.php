<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    public function devices()
    {
        return $this->belongsTo(Device::class);
    }
    public function readings()
    {
        return $this->hasMany(Reading::class);
    }
}
