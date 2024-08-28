<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'identifier', 'address_id'];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }  
}
