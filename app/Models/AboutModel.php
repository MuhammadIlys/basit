<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $fillable = [
        'intro',
        'title',
        'description',
        'full_name',
        'date_of_birth',
        'address',
        'zip_code',
        'email',
        'phone',
        'image',
    ];
}
