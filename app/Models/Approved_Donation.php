<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approved_Donation extends Model
{
    use HasFactory;

    public function donationRequest()
    {
        return $this->belongsTo(Donnation_Request::class);
    }
}
