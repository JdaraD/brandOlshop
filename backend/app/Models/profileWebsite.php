<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileWebsite extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name',
        'email',
        'sm_facebook',
        'sm_instagram',
        'to_tiktok',
        'to_shoppee',
        'to_tokopedia',
        'address',
        'profile_description',
    ];
}
