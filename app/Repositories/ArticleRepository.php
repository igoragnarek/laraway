<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\User;
use App\Article;

class ArticleRepository
{

    public function allArticles(Article $article)
    {
        return $article->all();
    }

    public function getPopularArticles($int = 4)
    {
        return DB::table('articles')
                ->limit($int)
                ->orderBy('views', 'desc')
                ->get();
    }

    public function blog()
    {
        return DB::table('articles')
                ->orderBy('created_at', 'desc')
                ->paginate(3);
    }

    public function pageById($id, Article $article)
    {
        return $article::find($id);
    }



}