<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Repositories\ArticleRepository;
use App\Repositories\CommentRepository;
use App\Article;
use App\User;


class BasicController extends Controller
{

    protected $articles;

    protected $comments;

    protected $path;

    protected $user;

    public function __construct(ArticleRepository $articles, CommentRepository $comments, User $user)
    {
        $this->articles = $articles;
        $this->comments = $comments;
        $this->path     = request()->getSchemeAndHttpHost();
        $this->user     = $user;
    }

    public function index(Request $request)
    {
        $popularArticles = $this->articles->getPopularArticles(8);

        return view('pages.basic', [
            'popArt' => $popularArticles,
            'path'   => $this->path,
        ]);

    }

    public function blog(Article $article)
    {

        $allPosts = $this->articles->blog($article);

        $users = $this->user->all();
        
        return view('pages.blog', [
            'posts' => $allPosts,
            'users' => $users,
            'path'  => $this->path,
        ]);
        
    }

    public function page($id, Article $article)
    {
    
        $page = $this->articles->pageById($id, $article);

        $username = $this->user->getUserById($page->user_id);  
        
        $date = $page->created_at->format('d.m.Y');

        $comments = $this->comments->commentsHere($id, $article);
        
        return view('pages.page', [
            'page'  => $page,
            'user'  => $username->name,
            'path'  => $this->path,
            'date'  => $date,
            'comments'  => $comments,
        ]);


    }

    public function create(Request $request)
    {
        if (Auth::check()) {

            $this->validate($request, [
                'comment' => 'required|max:255',
                'page'    => 'int'
            ]);
            
            $userId = Auth::user()->id;

            $request->user()->comments()->create([
                'text'       => $request->comment,
                'article_id' => $request->page,
                'user_id'    => $userId,
            ]);

            return redirect("/page-$request->page#bottom");
        }
    }
}
