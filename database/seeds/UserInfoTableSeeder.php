<?php

use Illuminate\Database\Seeder;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * TODO: user info的user_id必須與user關連，所以要改成以下
         * 先取得所有users，再利用foreach 去塞入user info
         */
        $users = \App\User::all();
        foreach ($users as $user){
            factory(App\UserInfo::class, 1000)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
