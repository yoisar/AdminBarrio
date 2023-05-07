<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbClient extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'document_type',
        'document_number',
        'nationality',
        'address',
        'phone',
        'billing_name',
        'billing_address',
        'tax_id',
        'tax_responsibility'
    ];
}
