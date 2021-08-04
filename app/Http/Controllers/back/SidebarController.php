<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Member;

class SidebarController extends Controller
{
    public function about () {
        $about = Member::find(1)->first();
        return view('back.sidebar.about', compact('about'));
    }

    public function aboutPost(Request $request) {

        $about = Member::find(1)->first();

        $about->about = $request->contentAbout;

        if($request->file('image') != null) {
          $strRandom =   str_random(15);
            $imgName=$strRandom.'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imgName);   //burasi public içerisinde uploads klasörüne img'i atmaya yarıyor
            $about->photo='uploads/'.$imgName;
        }

        $about->save();

        Toastr::success('About has changed.', 'Successfull');
        return redirect()->back();

    }
}
