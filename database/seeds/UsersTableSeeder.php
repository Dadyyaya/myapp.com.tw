<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'id' => str_random(10);
            'user_id' => str_random(10);
            'address' => str_random(10);
            'mobile' => str_random(10);
        ])
    }
}
