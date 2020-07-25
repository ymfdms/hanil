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
        	'korean'=>'테스트',
            'japanese'=>'テスト',
        ];
        DB::table('posts')->insert($param);
    }
}
