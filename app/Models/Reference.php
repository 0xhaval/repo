<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'lec_link',
        'user_id',
        'book_name',
        'book_link',
        'video_name',
        'video_link',
        'question_lec',
        'question_lec_link',
        'level',
        'dept',
        'semester',
    ];

    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('title', 'LIKE', '%' . $req . '%')
                ->orWhere('level', 'LIKE', '%' . $req . '%');
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
