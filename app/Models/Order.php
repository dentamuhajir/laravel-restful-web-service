<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // An order belongs to one customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
