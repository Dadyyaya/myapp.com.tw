<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: factoy有建立完整，就可以直接create資料
        factory(App\UserInfo::class, 50)->create();
    }
}
