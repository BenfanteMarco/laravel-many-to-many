<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Technology extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'name',
        'slug',
    ];
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
