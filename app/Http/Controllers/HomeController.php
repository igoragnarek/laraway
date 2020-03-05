<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

use App\Repositories\ArticleRepository;

class HomeController extends Controller
{

    protected $tasks;

    public function __construct(ArticleRepository $art)
    {
        $this->middleware('auth');
        $this->tasks = $art;
    }


    public function index(Article $article)
    {

        $articles = $this->tasks->allArticles($article);

        return view('home', [
            'articles' => $articles,
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:100',
            'text'  => 'required|max:255'
        ]);

        $request->user()->articles()->create([
            'title' => $request->title,
            'text'  => $request->text,
        ]);

        return back();
    }

    public function delete(Article $article)
    {

        $this->authorize('destroyPol', $article);
        $article->delete();

        return back();
    }
}
