<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = factory(\App\Event::class, 5)->create();

        foreach ($events as $event) {
            $event->comments()->create([
                'text' => 'random_text',
                'user_id' => $event->user_id
            ]);
        }
    }
}
