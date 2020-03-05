<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Article;

class Comment extends Model
{
    protected $fillable = [
        'text', 'user_id', 'article_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}