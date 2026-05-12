<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'image',
        'created_at',
        'updated_at',
    ];

    // relasi dengan products
    public function products()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
