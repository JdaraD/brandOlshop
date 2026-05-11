<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'avatar',
        'phone',
        'address',
        'gender',
        'tempat_lahir',
        'tanggal_lahir',
        'created_at',
        'updated_at',
    ];

    // relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
