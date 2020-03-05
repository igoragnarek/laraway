<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


use App\User;
use App\Comment;

class Article extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title', 'text',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}