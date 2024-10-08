<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    // public function post(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // public function reviews()
    // {
    //     return $this->hasMany(Review::class);
    // }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
