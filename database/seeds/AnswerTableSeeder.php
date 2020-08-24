<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
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
        	'answer_count'=>0,
            'correct_count'=>0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('answers')->insert($param);
    }
}
