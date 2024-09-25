<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donnation_Request extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi satu pengajuan donasi bisa memiliki satu donasi yang disetujui
    public function approvedDonation()
    {
        return $this->hasOne(Approved_Donation::class);
    }
}
