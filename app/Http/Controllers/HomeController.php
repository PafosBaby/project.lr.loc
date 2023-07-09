<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mainPage()
    {
        return view('main-page');
    }

    public function blogPage($categorySlug)
    {

        $category = Category::where('slug', $categorySlug)->first();
        return view('blog-page', [
            'category' => $category,

        ]);
    }
    public function articlePage($categorySlug, $articleSlug)
    {
        return view('article',[
            'article' => Article::where("slug",$articleSlug )->first()
        ]);
    }
}
