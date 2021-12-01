<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = Article::all();
        $articles = Article::paginate(5);
        return view('articles.index', ['articles' => $articles]);
    }
    public function detail($id)
    {
        $data = Article::find($id);
        return view('articles.detail', [
            'article' => $data
        ]);
    }
}
