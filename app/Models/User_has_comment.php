<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'comment'
    ];
}