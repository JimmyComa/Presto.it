<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function category($id){
        $category = Category::find($id);
        $announcements = null;
        if ($category) {
            $announcements = $category->announcement()->where('is_accepted',true)->get();  
        }
        return view('announcement.category',compact('category','announcements'));
    }


    public function user($id){
        
        $user= User::find($id);
        $announcements = null;
            if($user){
                $announcements = $user->announcement()->where('is_accepted',true)->get();
            }
            return view('announcement.user',compact('user','announcements'));
}
}