<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // TODO: 呼叫你所有的seeder
        $this->call(UserInfoTableSeeder::class);
    }
}
