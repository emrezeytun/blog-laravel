<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::get();
        return view('back.category.categoryList', compact('categories'));
    }

    public function addCategory(Request $request) {

        $category = new Category;

       $controlCat = $category->where('slug', str_slug($request->category))->first();

       if($controlCat) {

           Toastr::error('The category is already exist.', 'Error');
           return redirect()->back();
       }

        $category->name = $request->category;
        $category->slug = str_slug($request->category);

        $category->save();

        Toastr::success('The category has added', 'Succesful');

        return redirect()->back();
    }

    public function editCategory($id) {

        $category = Category::where('id', $id)->first();
        return view('back.category.categoryEdit', compact('category'));


    }

    public function editCategoryPost(Request $request, $id) {
        $category = Category::where('id', $id)->first();
        $category->name = $request->category;
        $category->slug = str_slug($request->category);
        $category->save();

        Toastr::success('Category name has changed', 'Successful');
        return redirect()->route('category.list');

    }

    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();

        Toastr::success('Category has deleted', 'Successful');


        return redirect()->back();

    }


}
