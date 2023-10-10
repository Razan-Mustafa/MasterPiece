<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalItems extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'rental_id',
        'product_id',
        'quantity',
        'unit_price',
        'start_date',
    ];

    public function rentalTransaction()
    {
        return $this->belongsTo(RentalTransaction::class);
    }

    // Define the relationship with the Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
