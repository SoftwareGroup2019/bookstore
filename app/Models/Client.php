<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'email', 'password','service',
    ];


    protected $hidden = [
        'password',
    ];



    public function apartments()
    {
        return $this->belongsToMany(Apartment::class, 'apartment_client')->withPivot('status');
    }
}
