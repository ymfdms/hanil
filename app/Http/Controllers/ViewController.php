<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function top()
    {
        return view('top');
    }
    public function choice()
    {
        return view('choice');
    }
    public function post()
    {
        return view('post');
    }
    public function rank()
    {
        return view('rank');
    }
    public function mypage()
    {
        return view('mypage');
    }
}
