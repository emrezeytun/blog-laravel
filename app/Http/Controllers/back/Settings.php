<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Setting;


class Settings extends Controller
{
    public function index() {
        $setting = Setting::find(1)->first();
        return view('back.settings.index', compact('setting'));
    }

    public function update(Request $request) {
       $settings = Setting::find(1)->first();
       $settings->title = $request->title;
       $settings->facebook = $request->facebook;
       $settings->twitter = $request->twitter;
       $settings->instagram = $request->instagram;
       $settings->github = $request->github;

       if($request->file('logo') != null) {
           $imgName=str_slug($request->title).'-bloglogo.'.$request->logo->getClientOriginalExtension();
           $request->logo->move(public_path('uploads'), $imgName);
           $settings->logo="uploads/".$imgName;
       }

       $settings->save();
       Toastr::success('Settings has updated.', 'Succesfull!');
       return redirect()->back();

    }
}
