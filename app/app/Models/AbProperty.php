<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'latitude',
        'longitude',
        'description',
        'sale_price',
        'rent_price',
        'square_meters',
        'currency',
        'status',        
        'property_type_id',
        'neighborhood_id',
    ];
        

    public function propertyType()
    {
        return $this->belongsTo(AbPropertyType::class);
    }

    public function neighborhood()
    {
        return $this->belongsTo(AbNeighborhood::class);
    }
}
