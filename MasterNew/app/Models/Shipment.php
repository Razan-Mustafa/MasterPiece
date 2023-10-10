<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'user_id',
        'city',
        'phone',
        'first_name',
        'last_name',
        'address',
        'shipmentDate',
    ];


    public function rentaltransaction()
    {
        return $this->belongsTo(RentalTransaction::class);
    }
}

