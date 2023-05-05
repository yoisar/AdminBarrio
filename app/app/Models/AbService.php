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
        'price',
        'ab_currency_id',
    ];

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
