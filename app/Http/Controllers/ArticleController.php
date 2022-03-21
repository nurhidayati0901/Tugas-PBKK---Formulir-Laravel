<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index() {
        return view('article', [
                "title" => "All Articles",
                "name" => "Nur Hidayati",
                "email" => "nurhidayati@gmail.com",
                "articles" => Article::with(['author', 'category'])->latest()->get()
            ]
        );
    }

    public function content(Article $article){
        return view('konten', [
            "title" => "Single Article",
            "article" => $article
        ]);
    }
}
