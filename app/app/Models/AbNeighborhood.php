<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbNeighborhood extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'city_id',
        'user_id'
    ];

    public function city()
    {
        return $this->belongsTo(AbCity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function properties()
    {
        return $this->hasMany(AbProperty::class);
    }
}
