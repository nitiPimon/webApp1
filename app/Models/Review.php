<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Restaurant;


class Review extends Model
{
    use HasFactory;

    protected $fillable = [
    'userID',
    'restaurantID',
    'reviews'
    ];

    public function user(){
        return $this->belongsTo(User::Class,'userID');
    }

    public function restaurant(){
        return $this->belongsTo(Restaurant::Class, 'restaurantID');
    }
}
