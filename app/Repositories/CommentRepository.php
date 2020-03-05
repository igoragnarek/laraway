<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Article;
use App\Comment;


class CommentRepository
{
    public function commentsHere($id, Article $article)
    {
        return $article::find($id)
                        ->comments()
                        ->orderBy('created_at', 'desc')
                        ->get();
    }
}