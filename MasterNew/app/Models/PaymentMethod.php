<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    public function rentaltransaction()
    {
        return $this->belongsTo(RentalTransaction::class);
    }    
    
    protected $fillable =
    [
        'user_id',
        'method',
        'total_amount',
        'payment_date',
    ];


}
