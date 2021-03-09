<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * accessory for image path
     */
    public function getImagePathAttribute()
    {
        return asset("files/post_images/{$this->image}");
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('title', 'LIKE', '%' . $req . '%');
        });
    }
}
