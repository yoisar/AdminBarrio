<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbClientInvoiceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'item',
        'description',
        'quantity',
        'price',
        'tax',
        'total',
        'ab_invoice_id'
    ];
}
