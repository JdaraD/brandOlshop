<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminColor extends Model
{
    use HasFactory;
    protected $fillable = [
        'header',
        'sidebar',
        'color_sidebar_judul',
        'Button_Active_Sidebar',
        'content',
        'created_at',
        'updated_at',
    ];
}
