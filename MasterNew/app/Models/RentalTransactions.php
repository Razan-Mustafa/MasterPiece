<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalTransactions extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'user_id',
        'shipment_id',
        'payment_id',
        'order_date',
        'total_amount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the relationship with the RentalItem model
    public function rentalItems()
    {
        return $this->hasMany(RentalItem::class);
    }
    public function shipment()
    {
        return $this->hasOne(Shipment::class);
    }
    public function payment()
    {
        return $this->hasOne(PaymentMethod::class);
    }

}
