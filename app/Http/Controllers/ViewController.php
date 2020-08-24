<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Request as AnswerRequest;

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
    public function answer()
    {
        $postcount=Post::max('id');
        $result=0;
        $session_key=0;
        $data1=0; //初期化
        while($data1==null){
            $data1 = Post::where('id',mt_rand(1,$postcount))->first();
            if(!$data1==null){
                break;
            }
        }
        
        $data2=0; //初期化
        while($data2==null){
            $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
            if(!$data2==null){
                break;
            }
        }
        
        $data3=0;
        while($data3==null){
            $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
            if(!$data3==null){
                break;
            }
        }
        $data4=0;
        while($data4==null){
            $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
            if(!$data4==null){
                break;
            }
        }
        
        $data_array=[$data1,$data2,$data3,$data4];
        $data_key=array_rand($data_array);
        $data_q=$data_array[$data_key];
        return view('answer',compact('data1','data2','data3','data4','data_q','session_key','session_all'));
    }
    
    public function correct(Request $request){
        $answered = AnswerRequest::input('question');
        $session_all=session()->all();
        $session_key=count($session_all);
        $session_key++;
        $request->session()->put($session_key, $answered);
        if($session_key>=10){
            $session_all=session()->all();
            dd($session_all);
            return view('check',compact('session_all'));
        }
        else{
            $postcount=Post::max('id');
            $result=0;
            
            $data1=0; //初期化
            while($data1==null){
                $data1 = Post::where('id',mt_rand(1,$postcount))->first();
                if(!$data1==null){
                    break;
                }
            }
            
            $data2=0; //初期化
            while($data2==null){
                $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
                if(!$data2==null){
                    break;
                }
            }
            
            $data3=0;
            while($data3==null){
                $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
                if(!$data3==null){
                    break;
                }
            }
            $data4=0;
            while($data4==null){
                $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
                if(!$data4==null){
                    break;
                }
            }
            
            $data_array=[$data1,$data2,$data3,$data4];
            $data_key=array_rand($data_array);
            $data_q=$data_array[$data_key];
            return view('answer',compact('data1','data2','data3','data4','data_q','session_key','session_all')); 
        }
    }
    
    public function incorrect(Request $request){
        $answered = AnswerRequest::input('question');
        $request->session()->put($session_key, $answered);
        if($session_key>=10){
            $session_all=session()->all();
            return view('check',compact('session_all'));
        }
        else{
            $postcount=Post::max('id');
            $result=0;
            $data1=0; //初期化
            while($data1==null){
                $data1 = Post::where('id',mt_rand(1,$postcount))->first();
                if(!$data1==null){
                    break;
                }
            }
            
            $data2=0; //初期化
            while($data2==null){
                $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
                if(!$data2==null){
                    break;
                }
            }
            
            $data3=0;
            while($data3==null){
                $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
                if(!$data3==null){
                    break;
                }
            }
            $data4=0;
            while($data4==null){
                $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
                if(!$data4==null){
                    break;
                }
            }
            
            $data_array=[$data1,$data2,$data3,$data4];
            $data_key=array_rand($data_array);
            $data_q=$data_array[$data_key];
            return view('answer',compact('data1','data2','data3','data4','data_q','session_key','session_all'));      
        }
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
