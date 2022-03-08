<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'description', 'icon', 'image', 'lat', 'lng', 'is_active', 'is_delete'];

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'hotel_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'hotel_id');
    }
}
