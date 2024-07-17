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

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}