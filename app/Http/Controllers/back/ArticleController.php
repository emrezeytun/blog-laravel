<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Validation\Validator;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        return view('back.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
       return view('back.articles.create', compact('categories') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'title'=>'required|min:5',
           'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:1024'
       ]);

        $article = new Article;
        $article->title = $request->title;
        $article->category_id = $request->category;
        $article->content = $request->contentArticle;
        $article->slug = str_slug($request->title);

        if($request->file('image')!=null) {

        $imgName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imgName);
        $article->image='uploads/'.$imgName;


        }

        $article->save();

       return redirect()->route('articles.index')->with('Success', 'Succesful, the article has added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::findOrFail($id);

        $categories = Category::all();
        return view('back.articles.update', compact('categories','article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'min:5',
            'image'=>'image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->category_id = $request->category;
        $article->content = $request->contentArticle;
        $article->slug = str_slug($request->title);

        if($request->file('image')!=null) {

            $imgName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imgName);
            $article->image='uploads/'.$imgName;


        }

        $article->save();

        return redirect()->route('articles.index')->with('Success', 'Succesful, the article has updated.');
    }



    public function deleteArticle($id) {
        Article::find($id)->delete();
        return redirect()->back();
    }


    public function trashed() {
        $articles = Article::onlyTrashed()->orderBy('deleted_at', 'DESC')->get();
        return view('back.articles.trashed',compact('articles'));
    }

    public function recoveryArticle($id) {
         Article::onlyTrashed()->find($id)->restore();
         return redirect()->route('articles.index');
    }

    public function hardDelete($id) {
        Article::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('articles.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
