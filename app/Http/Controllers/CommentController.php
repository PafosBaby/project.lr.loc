<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Article $article)
    {
        $request->validate([
            'sendername'=>'required',
            'emailaddress'=>'required|email',
            'sendermessage'=>'required|min:10'
        ]);
        ArticleComment::add($request->all(), $article);
        return back();
    }
}
