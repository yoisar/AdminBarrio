<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'functional_units',
        'unit_price',
        'min_months_contract',
        'tax',
        'subtotal',
        'final_price',
        'ab_currency_id'
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
