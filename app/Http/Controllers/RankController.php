<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\Result2;
use Illuminate\Support\Arr;
use DB;

class RankController extends Controller
{
    public function rank(){
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        
        $selected="投稿数";
        $post_id=\DB::table('users')->pluck('id'); //すべてのuser_idを取得
        // dump($post_id);
        for($count_id=1; $count_id<count($post_id)+1; $count_id++){
            $count=Post::where('user_id',$count_id)->count(); //user_idをカウント
            // dump($count);
            $count_result[]=$count; //これを並べ替えればランキングになる
            // $count_result[]->push($count_id,$count);
            // $count_result=array($count_id=>$count);
        }
        // dump($count_result);
        $collection = collect($count_result);
        $sorted_posted=$collection->sort()->all(); //昇順でソート
        // dump($sorted_posted);
        $reversed=array_reverse($sorted_posted); //ソートを逆転
        // dump($reversed);
        
        //最後から何番目が$rank1みたいな
        $rank1=array_slice($sorted_posted,-1,1);
        // dump($rank1);
        $rank1_no=key(array_slice($sorted_posted, -1, 1, true))+1;
        // dump($rank1_no);  //この値がuser_id
        $rank_name1=\DB::table('users')->where('id',$rank1_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name1);
        
        $rank2=array_slice($sorted_posted,-2,1);
        // dump($rank2);
        $rank2_no=key(array_slice($sorted_posted, -2, 1, true))+1;
        // dump($rank2_no);
        $rank_name2=\DB::table('users')->where('id',$rank2_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        $rank3=array_slice($sorted_posted,-3,1);
        // dump($rank3);
        $rank3_no=key(array_slice($sorted_posted, -3, 1, true))+1;
        // dump($rank3_no);
        $rank_name3=\DB::table('users')->where('id',$rank3_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        $rank4=array_slice($sorted_posted,-4,1);
        // dump($rank3);
        $rank4_no=key(array_slice($sorted_posted, -4, 1, true))+1;
        // dump($rank4_no);
        $rank_name4=\DB::table('users')->where('id',$rank4_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        $rank5=array_slice($sorted_posted,-5,1);
        // dump($rank5);
        $rank5_no=key(array_slice($sorted_posted, -5, 1, true))+1;
        // dump($rank5_no);
        $rank_name5=\DB::table('users')->where('id',$rank5_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        return view('rank',compact('selected','rank_name1','rank_name2','rank_name3','rank_name4','rank_name5','rank_data','post_id','answer_count','inout','post_count','flattened_id','count','reversed'));
    }
    
    public function post_select(){
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        
        $selected="投稿数";
        $post_id=\DB::table('users')->pluck('id'); //すべてのuser_idを取得
        // dump($post_id);
        
        for($count_id=1; $count_id<count($post_id)+1; $count_id++){
            $count=Post::where('user_id',$count_id)->count(); //user_idをカウント
            // dump($count);
            $count_result[]=$count; //これを並べ替えればランキングになる
            // $count_result[]->push($count_id,$count);
            // $count_result=array($count_id=>$count);
        }
        // dump($count_result);
        $collection = collect($count_result);
        $sorted_posted=$collection->sort()->all(); //昇順でソート
        // dump($sorted_posted);
        $reversed=array_reverse($sorted_posted); //ソートを逆転
        // dump($reversed);
        
        //最後から何番目が$rank1みたいな
        $rank1=array_slice($sorted_posted,-1,1);
        // dump($rank1);
        $rank1_no=key(array_slice($sorted_posted, -1, 1, true))+1;
        // dump($rank1_no);  //この値がuser_id
        $rank_name1=\DB::table('users')->where('id',$rank1_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name1);
        
        $rank2=array_slice($sorted_posted,-2,1);
        // dump($rank2);
        $rank2_no=key(array_slice($sorted_posted, -2, 1, true))+1;
        // dump($rank2_no);
        $rank_name2=\DB::table('users')->where('id',$rank2_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        $rank3=array_slice($sorted_posted,-3,1);
        // dump($rank3);
        $rank3_no=key(array_slice($sorted_posted, -3, 1, true))+1;
        // dump($rank3_no);
        $rank_name3=\DB::table('users')->where('id',$rank3_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        $rank4=array_slice($sorted_posted,-4,1);
        // dump($rank3);
        $rank4_no=key(array_slice($sorted_posted, -4, 1, true))+1;
        // dump($rank4_no);
        $rank_name4=\DB::table('users')->where('id',$rank4_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        $rank5=array_slice($sorted_posted,-5,1);
        // dump($rank5);
        $rank5_no=key(array_slice($sorted_posted, -5, 1, true))+1;
        // dump($rank5_no);
        $rank_name5=\DB::table('users')->where('id',$rank5_no)->first(); //$rank1_noでusersテーブルのレコード検索
        
        return view('rank',compact('selected','rank_name1','rank_name2','rank_name3','rank_name4','rank_name5','rank_data','post_id','answer_count','inout','post_count','flattened_id','count','reversed'));
    }
    
    public function answer_select(){
        if (Auth::check()){
            $user=Auth::user();
            $inout=$user->name;
        }
        else{
            $inout="ログイン";
        }
        
        $result2=new Result2;
        $answer_count=Result2::where('user_id',Auth::id())->sum('answer_count'); //ヘッダー用、回答数
        
        $selected="回答数";
        $answer_id=\DB::table('users')->pluck('id'); //すべてのuser_idを取得
        // dump($post_id);
        
        for($count_id=1; $count_id<count($answer_id)+1; $count_id++){
            $count=Result2::where('user_id',$count_id)->count(); //user_idをカウント
            // dump($count);
            $count_result[]=$count; //これを並べ替えればランキングになる
            // $count_result[]->push($count_id,$count);
            // $count_result=array($count_id=>$count);
        }
        // dump($count_result);
        $collection = collect($count_result);
        $sorted_answered=$collection->sort()->all(); //昇順でソート
        // dump($sorted_answered);
        $reversed=array_reverse($sorted_answered); //ソートを逆転
        // dump($reversed);
        
        //最後から何番目が$rank1みたいな
        $rank1=array_slice($sorted_answered,-1,1);
        // dump($rank1);
        $rank1_no=key(array_slice($sorted_answered, -1, 1, true))+1;
        // dump($rank1_no);  //この値がuser_id
        $rank_name1=\DB::table('users')->where('id',$rank1_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name1);
        
        $rank2=array_slice($sorted_answered,-2,1);
        // dump($rank2);
        $rank2_no=key(array_slice($sorted_answered, -2, 1, true))+1;
        // dump($rank2_no);  //この値がuser_id
        $rank_name2=\DB::table('users')->where('id',$rank2_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name2);
        
        $rank3=array_slice($sorted_answered,-3,1);
        // dump($rank3);
        $rank3_no=key(array_slice($sorted_answered, -3, 1, true))+1;
        // dump($rank3_no);  //この値がuser_id
        $rank_name3=\DB::table('users')->where('id',$rank3_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name3);
        
        $rank4=array_slice($sorted_answered,-4,1);
        // dump($rank4);
        $rank4_no=key(array_slice($sorted_answered, -4, 1, true))+1;
        // dump($rank4_no);  //この値がuser_id
        $rank_name4=\DB::table('users')->where('id',$rank4_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name4);
        
        $rank5=array_slice($sorted_answered,-5,1);
        // dump($rank5);
        $rank5_no=key(array_slice($sorted_answered, -5, 1, true))+1;
        // dump($rank5_no);  //この値がuser_id
        $rank_name5=\DB::table('users')->where('id',$rank5_no)->first(); //$rank1_noでusersテーブルのレコード検索
        // dump($rank_name5);
        
        return view('rank',compact('selected','rank_name1','rank_name2','rank_name3','rank_name4','rank_name5','rank_data','answer_id','answer_count','inout','answer_count','flattened_id','count','reversed'));
    }
}
