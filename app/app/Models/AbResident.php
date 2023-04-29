<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbResident extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'property_id',
        'document_type',
        'document_number',
        'nationality',
        'current_address',
    ];

    public function property()
    {
        return $this->belongsTo(AbProperty::class);
    }
}
