<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}