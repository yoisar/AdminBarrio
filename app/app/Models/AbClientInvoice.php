<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbClientInvoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'ab_client_id', // relación con el modelo Client
        'invoice_number',
        'invoice_date',
        'due_date',
        'amount',
        'status', // puede ser 'draft', 'sent', 'paid', 'pending',  'overdue'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
