<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'country',
        'city',
        'dob',
        'category',
        'mobile',
        'email',
        'criminal',
        'profile',
        'facebook',
        'tiktok',
        'insta',
        'yt',
        'sc',
        'linkedin',
        'total',
        'link1',
        'link2',
        'link3',
        'link4',
        'link5',
        'describe',
        'deserve',
        'achievement',
        'image'
    ];
}
