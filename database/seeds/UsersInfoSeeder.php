<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\UserInfo;

class UsersInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        foreach ($users as $user) {
            $newUserInfo = new UserInfo();
            $newUserInfo->user_id = $user->id;
            $newUserInfo->day_of_birth = $faker->date();
            $newUserInfo->description = $faker->sentence(20, true);;
            $newUserInfo->website = $faker->domainName();

            $newUserInfo->save();
        }
    }
}
