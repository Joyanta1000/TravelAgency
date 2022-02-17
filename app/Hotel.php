<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name'];

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'hotel_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'hotel_id');
    }
}
