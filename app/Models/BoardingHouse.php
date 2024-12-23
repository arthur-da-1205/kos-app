<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'slug', 
        'thumbnail',
        'city_id',
        'category_id',
        'price',
        'address'
    ];

    public function city() {
        return  $this->belongsTo(City::class);
    }

    public function category() {
        return  $this->belongsTo(Category::class);
    }

    public function rooms() {
        return $this->hasMany(Room::class);
    }

    public function bouses() {
        return $this->hasMany(Bonus::class);
    }

    public function testimonials() {
        return $this->hasMany(Testimonial::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}