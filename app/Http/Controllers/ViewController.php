<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use Request as AnswerRequest;
use Illuminate\Support\Arr;
use App\Models\Result2;

class ViewController extends Controller
{
    public function top()
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
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        return view('top',compact('answer_count','inout','correct_sum'));
    }

    public function choice()
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
        return view('choice',compact('answer_count','inout'));
    }
    public function post()
    {
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
            return redirect('/home');
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        return view('post',compact('answer_count','inout','correct_sum'));
    }
    public function rank()
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
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        return view('rank',compact('answer_count','inout','correct_sum'));
    }
    public function mypage()
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
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        return view('mypage',compact('answer_count','inout','correct_sum'));
    }
    
    public function answer(Request $request){
        // ini_set("max_execution_time",0);
        $request->session()->forget(['0','1','2','3','4','5','6','7','8','9','10']);
        $request->session()->forget('pnum');
        if (Auth::check()){ //ログイン確認
            $user=Auth::user(); //ログインユーザーの情報を取得
            $inout=$user->name; //nameをヘッダーに表示させる用
        }
        else{
            $inout="ログイン"; //ログインしていなければ「ログイン」表示
            return redirect('/home');
        }
        $postcount=Post::max('id'); //投稿のidの最大値を取得
        $data1=null; //初期化
        while($data1==null){
            $data1 = Post::where('id',mt_rand(1,$postcount))->first();
        }
        $data2=null; //初期化
        while($data2==null){
            $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
        }
        $data3=null; //初期化
        while($data3==null){
            $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
        }
        $data4=null; //初期化
        while($data4==null){
            $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
        }
        $data_array=[$data1,$data2,$data3,$data4]; //data_qを得るため、data1-data4を配列化
        $data_key=array_rand($data_array); //data1-data4からランダムにkeyを取得
        $data_q=$data_array[$data_key]; //ランダムなkeyからdata_qを取得
        $number=1; //問題番号。例(Q1)の初期値
        $result2=new Result2; //モデルResult2を使用
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        $request->session()->regenerateToken();
        return view('answer',compact('data1','data2','data3','data4','data_q','number','answer_count','inout','correct_sum'));
    }
    
    public function correct(Request $request){ //正解したとき、この関数が動く
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $pnum=$request->session()->get('pnum'); //問題番号用、変数pnum
        if($pnum==null){
            $pnum=1;
            $request->session()->put('pnum',$pnum);
        }else{
            $pnum++;
            $request->session()->put('pnum',$pnum);
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        $answered = AnswerRequest::input('answer2'); //クリックした選択肢の値を取得
        // dump($answered);
        $questioned=Post::where('korean',$answered)->value('japanese');
        // dump($questioned);
        $request->session()->push($pnum,$questioned);
        $request->session()->push($pnum,$answered);
        $request->session()->push($pnum,'正解');
        $number=$pnum+1; //現在何問目か
        if($number>10){
            $result=$request->session()->all();
            // dump($result);
            $flattened=Arr::flatten($result); //多次元配列を１次元配列へ
            // dd($flattened);
            $flattened_count=array_count_values($flattened); //各要素数をカウント
            // dump($flattened_count);
            if(!array_search('正解',$flattened)==false){
                $correct_count=$flattened_count["正解"]; //上でカウントした「正解」の要素数を格納
                $correct_rate=$correct_count/10; 
                $user=Auth::user(); //ここからDBへ格納
                $id=Auth::id();
                $result_db = new Result2;
                $result_db->user_id = $id;
                $result_db->answer_count = 10;
                $result_db->correct_rate = $correct_rate;
                $result_db->save(); //ここまでDB格納
                $request->session()->regenerateToken();
                
                //配列取り出しここから
                $value=array_slice($result,6,10); //回答結果のsessionのみを抽出
                // dump($value);
                //ここまで
                
                return view('check',compact('result','number','answer_count','inout','value','correct_sum','correct_count'));
            }
            else{
                $correct_count=0; //上でカウントした「正解」の要素数を格納
                $correct_rate=$correct_count/10; 
                $user=Auth::user(); //ここからDBへ格納
                $id=Auth::id();
                $result_db = new Result2;
                $result_db->user_id = $id;
                $result_db->answer_count = 10;
                $result_db->correct_rate = $correct_rate;
                $result_db->save(); //ここまでDB格納
                $request->session()->regenerateToken();
                return view('check',compact('result','number','answer_count','inout','value','correct_count','correct_sum'));    
            }
            // dump($correct_count);
            $correct_rate=$correct_count/10; 
            $user=Auth::user(); //ここからDBへ格納
            $id=Auth::id();
            $result_db = new Result2;
            $result_db->user_id = $id;
            $result_db->answer_count = 10;
            $result_db->correct_rate = $correct_rate;
            $result_db->save(); //ここまでDB格納
            $request->session()->regenerateToken();
            return view('check',compact('result','number','answer_count','inout','correct_count','correct_sum'));
        }
        else{
            $postcount=Post::max('id');
            $data1=null; //初期化
            while($data1==null){
                $data1 = Post::where('id',mt_rand(1,$postcount))->first();
            }
            $data2=null; //初期化
            while($data2==null){
                $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
            }
            $data3=null;
            while($data3==null){
                $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
            }
            $data4=null;
            while($data4==null){
                $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
            }
            $data_array=[$data1,$data2,$data3,$data4];
            $data_key=array_rand($data_array);
            $data_q=$data_array[$data_key];
            $request->session()->regenerateToken();
            return view('answer',compact('data1','data2','data3','data4','data_q','number','answer_count','inout','correct_sum')); 
        }
    }
    
    public function incorrect(Request $request){ //正解したとき、この関数が動く
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $pnum=$request->session()->get('pnum'); //問題番号用、変数pnum
        if($pnum==null){
            $pnum=1;
            $request->session()->put('pnum',$pnum);
        }else{
            $pnum++;
            $request->session()->put('pnum',$pnum);
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        $answered = AnswerRequest::input('answer2'); //クリックした選択肢の値を取得
        // dump($answered);
        $questioned=Post::where('korean',$answered)->value('japanese');
        // dump($questioned);
        $request->session()->push($pnum,$questioned);
        $request->session()->push($pnum,$answered);
        $request->session()->push($pnum,'不正解');
        $number=$pnum+1; //現在何問目か
        if($number>10){
            $result=$request->session()->all();
            // dump($result);
            $flattened=Arr::flatten($result); //多次元配列を１次元配列へ
            // dd($flattened);
            $flattened_count=array_count_values($flattened); //各要素数をカウント
            // dump($flattened_count);
            if(!array_search('正解',$flattened)==false){
                $correct_count=$flattened_count["正解"]; //上でカウントした「正解」の要素数を格納
                $correct_rate=$correct_count/10; 
                $user=Auth::user(); //ここからDBへ格納
                $id=Auth::id();
                $result_db = new Result2;
                $result_db->user_id = $id;
                $result_db->answer_count = 10;
                $result_db->correct_rate = $correct_rate;
                $result_db->save(); //ここまでDB格納
                $request->session()->regenerateToken();
                
                //配列取り出しここから
                $value=array_slice($result,6,10); //回答結果のsessionのみを抽出
                // dump($value);
                
                //ここまで
                
                return view('check',compact('result','number','answer_count','inout','value','correct_count','correct_sum'));
            }
            else{
                $correct_count=0; //上でカウントした「正解」の要素数を格納
                $correct_rate=$correct_count/10; 
                $user=Auth::user(); //ここからDBへ格納
                $id=Auth::id();
                $result_db = new Result2;
                $result_db->user_id = $id;
                $result_db->answer_count = 10;
                $result_db->correct_rate = $correct_rate;
                $result_db->save(); //ここまでDB格納
                $request->session()->regenerateToken();
                $value=array_slice($result,6,10); //回答結果のsessionのみを抽出
                return view('check',compact('result','number','answer_count','inout','value','correct_count','correct_sum'));    
            }
        }
        else{
            $postcount=Post::max('id');
            $data1=null; //初期化
            while($data1==null){
                $data1 = Post::where('id',mt_rand(1,$postcount))->first();
            }
            $data2=null; //初期化
            while($data2==null){
                $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
            }
            $data3=null;
            while($data3==null){
                $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
            }
            $data4=null;
            while($data4==null){
                $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
            }
            $data_array=[$data1,$data2,$data3,$data4];
            $data_key=array_rand($data_array);
            $data_q=$data_array[$data_key];
            $request->session()->regenerateToken();
            return view('answer',compact('data1','data2','data3','data4','data_q','number','answer_count','inout','correct_sum')); 
        }
    }
    
    public function goanswer(Request $request){
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $sampledata=$request->session()->all();
        $request->session()->forget('pnum');
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        $request->session()->forget(['0','1','2','3','4','5','6','7','8','9','10']);
        $request->session()->forget('pnum');
        $number=1; //現在何問目か
        $postcount=Post::max('id');
        $result=0;
        $data1=null; //初期化
        while($data1==null){
            $data1 = Post::where('id',mt_rand(1,$postcount))->first();
        }
        
        $data2=null; //初期化
        while($data2==null){
            $data2=Post::wherenotin('id',$data1)->where('id',mt_rand(1,$postcount))->first();
        }
        
        $data3=null;
        while($data3==null){
            $data3=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->where('id',mt_rand(1,$postcount))->first();
        }
        $data4=null;
        while($data4==null){
            $data4=Post::wherenotin('id',$data1)->wherenotin('id',$data2)->wherenotin('id',$data3)->where('id',mt_rand(1,$postcount))->first();
        }
        $data_array=[$data1,$data2,$data3,$data4];
        $data_key=array_rand($data_array);
        $data_q=$data_array[$data_key];
        $request->session()->regenerateToken();
        return view('answer',compact('data1','data2','data3','data4','data_q','number','answer_count','inout','correct_sum')); 
    }
    
    public function gotop(Request $request){
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        $request->session()->forget(['0','1','2','3','4','5','6','7','8','9','10']);
        $request->session()->forget('pnum');
        return view('top',compact('answer_count','inout','correct_sum'));
    }
    
    public function logout(Request $request)
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
        $correct_sum=Post::where('user_id',Auth::id())->count(); //ヘッダー用、投稿数
        $request->session()->flush();
        Auth::logout();
        return redirect('/home');
    }
}

