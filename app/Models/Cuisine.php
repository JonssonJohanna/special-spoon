<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    use HasFactory;

    protected $fillable = [
        'cuisine',
    ];

    public $timestamps = false;

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }
}
