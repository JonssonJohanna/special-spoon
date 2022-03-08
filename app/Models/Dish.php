<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'dish',
        'cuisines_id',
        'diet',
    ];

    public $timestamps = false;

    public function Users()
    {
        return $this->belongsToMany(User::class)->using(Favorite::class);
    }
}
