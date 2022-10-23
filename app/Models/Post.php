<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function photo(){
        return $this->hasMany(Photo::class, 'post_id');
    }

}
