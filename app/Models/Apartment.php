<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;


    protected $fillable = [
        'apt_number', 'room_number',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'apartment_client');
    }
}
