<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function Cars()
    {
        return $this->hasMany(Cars::class);
    }

}
