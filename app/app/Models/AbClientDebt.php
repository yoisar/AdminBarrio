<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbClientDebt extends Model
{
    use HasFactory;

    protected $fillable = [
        'ab_client_id',
        'next_payment_date',
        'amount'
    ];
}
