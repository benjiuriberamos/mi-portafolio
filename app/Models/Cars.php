<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    protected $fillable = [
        'color',
        'description',
        'image',
        'images',
        'brand_id',
    ];

    protected $casts = [
        'images' => 'json',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }
    
}
