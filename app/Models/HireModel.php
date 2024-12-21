<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireModel extends Model
{
    use HasFactory;
    protected $table = 'hire_models';
    protected $fillable = ['title','description'];
    
}