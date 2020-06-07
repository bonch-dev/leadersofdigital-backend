<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = factory(\App\Question::class, 5)->create();

        foreach ($questions as $question) {
            $items = factory(\App\QuestionItem::class, 3)->make();

            $question->question_items()->createMany(
                $items->toArray()
            );
        }
    }
}
