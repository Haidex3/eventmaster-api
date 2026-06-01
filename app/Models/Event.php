<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'date',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}