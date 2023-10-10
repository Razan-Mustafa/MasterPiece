<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function gender()
    {
        return $this->belongsTo(Gender::class, 'gender_id');
    }

    public function itemDetails()
    {
        return $this->hasMany(ItemDetail::class);
    }
}
