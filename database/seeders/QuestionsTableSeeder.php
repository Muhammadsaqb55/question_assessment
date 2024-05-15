<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionsTableSeeder extends Seeder
{
    public function run()
    {
        Question::create(['question_text' => 'What is the capital of France?']);
        Question::create(['question_text' => 'What is 2 + 2?']);
    }
}
