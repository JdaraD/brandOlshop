<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = [
        'name',
    ];

    // relasi dengan user
    public function users()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
