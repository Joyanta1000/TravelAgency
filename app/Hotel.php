<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'description', 'icon', 'image', 'lat', 'lng', 'is_active', 'is_delete'];

    protected $primaryKey = 'id';

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'hotel_id');
    }

    public function review()
    {
        return $this->hasMany(Review::class, 'hotel_id', 'id');
    }

    public function avgRating()
    {
        return $this->review()
            ->selectRaw('avg(review) as aggregate, hotel_id')
            ->groupBy('hotel_id');
    }

    public function getAvgRatingAttribute()
    {
        if (!array_key_exists('avgRating', $this->relations)) {
            $this->load('avgRating');
        }

        $relation = $this->getRelation('avgRating')->first();

        return ($relation) ? $relation->aggregate : null;
    }
}
