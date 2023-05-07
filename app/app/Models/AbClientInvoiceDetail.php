<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbClientInvoiceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'description',
        'quantity',
        'price',
        'tax',
        'total',
        'ab_invoice_id'
    ];
}
