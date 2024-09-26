<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];

    // A Customer can have many orders
    public function orders() 
    {
        return $this->hasMany(Order::class);
    }
}
