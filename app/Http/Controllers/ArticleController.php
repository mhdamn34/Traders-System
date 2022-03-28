<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Article_Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function store(){
        $article = new Article();
        $article -> title = ('Best Pc Gaming 2022');
        $article -> slug = ('Best-Pc-Gaming-2022');
        $article -> body = ('Top 10 custom build gaming pc in this year');

        $article -> save();

        return view('article');
    }
}
