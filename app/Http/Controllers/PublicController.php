<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PublicController extends Controller
{
    // public function __construct(){
    //     $this->middleware('guest')->except('home','searchAnnouncements');
    // }
    public function home(){
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->take(5)->get();
        return view('home',compact('announcements'));

    }

    public function searchAnnouncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted',true)->paginate(10);
        return view('announcement.index',compact('announcements'));
    }

    public function setLanguage($lang){
        App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();
    }

}

