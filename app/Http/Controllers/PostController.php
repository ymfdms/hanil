<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $user=Auth::user();
        $post = new Post;
        $post->user_id = $user->id;
        $post->korean = $request->korean;
        $post->japanese = $request->japanese;
        $post->save();
        return redirect('post');
    }
}
