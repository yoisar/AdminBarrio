<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbFunctionalUnit extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'ab_property_id'];

    public function property()
    {
        return $this->belongsTo(AbProperty::class);
    }

    public function residents()
    {
        return $this->hasMany(AbResident::class);
    }
}
