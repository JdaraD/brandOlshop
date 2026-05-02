<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_category',
        'name',
        'price',
        'stock',
        'image',
        'description',
        'created_at',
        'updated_at',
    ];

    // relasi dengan categories products
    public function category()
    {
        return $this->belongsTo(CategoriesProducts::class, 'id_category');
    }
}
