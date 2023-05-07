<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbCientServiceContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'ab_client_id',
        'ab_service_id',
        'ab_currency_id',
        'start_date',
        'end_date',
        'price',
        'exchange_rate',
        'payment_day',
        'contract_number'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }
}
