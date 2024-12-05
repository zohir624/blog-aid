<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Define the fillable properties (only columns in the posts table)
    protected $fillable = [
        'title',
        'body',
    ];

    public function category()
{
    return $this->belongsTo(Category::class);
}

public function comments()
{
    return $this->hasMany(Comment::class);
}

}
