<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
    public function editProfileUser()
    {
        return view('front.profile.edit');
    }

//    public function updateProfile()
//    {
//        return redirect()->back()->with(['error' => 'Something Wrong Try Again']);
//    }
}
