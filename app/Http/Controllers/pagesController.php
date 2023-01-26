<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class pagesController extends Controller
{
    public function getHome(){
        return view("Pages.Home");
    }
    public function getAbout(){
            return view("Pages.About");
    }
    public function getContact(){
            return view("Pages.Contact");
    }
    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
