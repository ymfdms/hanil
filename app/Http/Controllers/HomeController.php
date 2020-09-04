<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result2;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        return view('top',compact('answer_count','inout'));
    }
}
