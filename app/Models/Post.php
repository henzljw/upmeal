<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cuisine;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'cuisine_id',
        'title',
        'description',
        'image',
        'slug',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function cuisine()
    {
        return $this->belongsTo(Cuisine::class, 'cuisine_id', 'id');
    }
}
