<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'iamge',
        'name',
        'slug'
    ];

    public function boardingHouse() {
        return $this->hasMany(BoardingHouse::class);
    }
}
