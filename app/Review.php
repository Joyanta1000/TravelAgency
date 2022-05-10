<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['hotel_id',  'category_id', 'review', 'reviewed_by', 'comment', 'is_publish'];
    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }

    public function review_category()
    {
        return $this->belongsTo(ReviewCategory::class, 'category_id');
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'reviewed_by');
    }
}
