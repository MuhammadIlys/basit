<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsModal extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillables = ['title','number','progress'];
}
