<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewCategory extends Model
{
    protected $fillable = ['Category'];

    public function review()
    {
        return $this->hasMany(Review::class, 'category_id');
    }
}
