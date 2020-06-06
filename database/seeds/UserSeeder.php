<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var []User $users */
        $users = factory(User::class, 5)->create();

        foreach ($users as $user) {
            $user
                ->subscribers()
                ->createMany(
                    collect(factory(User::class, random_int(2, 3))->make())->toArray()
                );
        }
    }
}
