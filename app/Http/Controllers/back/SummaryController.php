<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;




class SummaryController extends Controller
{
    public function index() {
        $articlesCount = Article::get()->count();
        $categoriesCount = Category::get()->count();
        $commentsCount = Comment::get()->count();

        return view('back.pages.summary', compact('articlesCount', 'categoriesCount', 'commentsCount'));
    }
}
