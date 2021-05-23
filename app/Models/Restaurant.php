<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Review;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'rating',
    'image',
    'userID',
    'body',
    'location',
    'timeOC'
    ];

    public function user(){
        return $this->belongsTo(User::Class,'userID');
    }

    public function reviews(){
        return $this->hasMany(Review::Class, 'restaurantID');
    }
}