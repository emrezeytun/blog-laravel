<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Page;
use Illuminate\Support\Facades\Crypt;

class PageController extends Controller
{
    public function index() {
        $pages = Page::get();
        return view('back.pages.index', compact('pages'));

    }

    public function create() {
       return view('back.pages.create');
    }

    public function createPost(Request $request) {
        $page = new Page();
        $page->title = $request->title;
        $page->slug = str_slug($request->title);
        $page->image = '';
        $page->content = $request->contentPage;

        if($request->file('image') != null) {
            $imgName = str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'), $imgName);
            $page->image = 'uploads/'.$imgName;
        }


        $page->save();
        Toastr::success('The page has added.', 'Successful');
        return redirect()->back();
    }

    public function pageEdit($id) {
        $page = Page::where('id', $id)->first();

        return view('back.pages.edit', compact('page'));

    }

    public function editPost(Request $request) {

       $page = Page::find($request->PageId);

       $page->title = $request->title;
       $page->content = $request->contentPage;
       $page->slug = str_slug($request->title);

       if($request->file('image') != null) {
           $imgName=str_slug($request->title).'.'.$request->image->getClientOriginalExtension();
           $request->image->move(public_path('uploads'),$imgName);
           $page->image='uploads/'.$imgName;
       }

       $page->save();
       Toastr::success('The page has updated.', 'Succesful');
       return redirect()->back();

    }



    public function deletePage($id) {
        Page::where('id', Crypt::decryptString($id))->first()->delete();
        return redirect()->back();
    }

    public function pageMenuOn(Request $request) {

        $page = Page::where('id', 1)->first();

        $page->showOnMenu = 1;

        



    }


}
