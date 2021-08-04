<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Member;
use App\Models\Page;
use App\Models\Contact;

use Illuminate\Support\Facades\Validator;

class Homepage extends Controller
{


    public function __construct() {
        view()->share('admin',Member::where('id', 1)->first());
        view()->share('sidebarComments',Comment::select('comments.name as commentName', 'comments.comment as commentContent')->join('articles', 'articles.id', '=', 'comments.article_id' )->join('categories', 'categories.id', '=', 'articles.category_id')
            ->select([
                // all fields that you want to select
                "articles.slug as articlesSlug",
                "categories.slug as categoriesSlug",
                "comments.name as commentsName",
                "comments.comment as commentContent",
                "articles.title as articleTitle"
            ])->get());
        view()->share('categories', Category::orderBy('id', 'DESC')->get());
        view()->share('sidebarLastArticles', Article::inRandomOrder()->limit(3)->get());
        view()->share('randomArticles',  Article::inRandomOrder()->limit(3)->get());
        view()->share('pages', Page::where('showOnMenu', 1)->orderBy('id', 'ASC')->get());
        view()->share('categoriesOrd', Category::orderBy('id', 'DESC')->get());
    }

    public function index() {

        $data['categoriesOrd']= Category::orderBy('id', 'DESC')->get();

        $data2['articles']= Article::orderBy('id', 'DESC')->paginate(10);

        return view('front.homepage', $data, $data2);

    }

    public function single($category, $slug) {
     $categoryF = Category::whereSlug($category)->first() ?? abort(403, 'Böyle bir kategori yok');
     $article= Article::where('slug', $slug)->where('category_id', $categoryF->id)->first() ?? abort(403, 'Böyle bir yazı bulunamadı.');
     $article->increment('hit');
     $data['article'] = $article;
     $data['takeCategoryName'] = Category::where('slug', $category)->first();

     $data['comments'] = Article::find($article->id)->getComments;
     $data['takeArticleName'] = Article::where('slug', $slug)->first();
     $data['categoryName'] = Category::where('slug', $category)->first();
     $data['categoriesOrd']= Category::orderBy('id', 'DESC')->get();




    return view('front.single', $data);
    }

    public function categoryPage($category) {
        $cat = Category::where('slug', $category)->first();
        $data['cat'] = $cat;

        $data['articles'] = Article::where('category_id', $cat->id)->paginate(10);;


        $data['categoriesOrd']= Category::orderBy('id', 'DESC')->get();

        return view('front.category', $data);
    }

    public function contact() {
        $data['categoriesOrd']= Category::orderBy('id', 'DESC')->get();
        return view('front.contact', $data);
    }

    public function contactPost(Request $request) {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email',
        ];


       $vali = Validator::make($request->post(), $rules);

       if($vali->fails()) {
          return redirect()->route('contact')->withErrors($vali)->withInput();
       }

        $contact = new Contact;
        $contact->name= $request->name;
        $contact->email = $request->email;
        $contact->title = $request->title;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->route('contact')->with('successSession', 'Succesfull, thanks.' );
    }


    public function page($slug) {
        $page=Page::whereSlug($slug)->first() ?? abort(403, 'Böyle bir sayfa bulunamadı');

        return view('front.page', compact('page'));
    }

    public function singlePageComment($category,$slug,Request $request) {

        $comment = new Comment;

        $articleId = Article::where('slug',$slug)->first()->id;
        $categoryId = Category::where('slug', $category)->first()->id;

        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->article_id = $articleId;
        $comment->save();




        return redirect()->back()->with('successSession','Succesfull, the comment has sent.');


    }

    public function search() {

    }

    public function searchPost(Request $request) {

        $keyword = $request->search;

        $articles = Article::where('title', 'like', '%'.$keyword.'%')->get();



        return view('front.search', compact('articles', 'keyword'));




    }



}
