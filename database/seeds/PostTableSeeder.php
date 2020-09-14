<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
        	'user_id'=>1,
        	'korean'=>'테스트5',
            'japanese'=>'テスト5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param=[
        	'user_id'=>1,
        	'korean'=>'테스트6',
            'japanese'=>'テスト6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param=[
        	'user_id'=>1,
        	'korean'=>'테스트7',
            'japanese'=>'テスト7',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
        
        $param=[
        	'user_id'=>1,
        	'korean'=>'테스트8',
            'japanese'=>'テスト8',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('posts')->insert($param);
    }
}
