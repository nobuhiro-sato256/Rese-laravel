<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable =[
        'store_name',
        'area',
        'genre',
        'summary',
        'shop_image',
    ];

    public function favorite()
    {
        return $this->hasMany(Favorirte::class);
    }

    public function Reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}