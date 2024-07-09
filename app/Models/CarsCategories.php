<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarsCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'car_id',
    ];
}
