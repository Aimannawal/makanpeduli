<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Donation extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'food_item', 'quantity', 'unit', 'expiry_date', 'description', 'status', 'address', 'restaurant_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
