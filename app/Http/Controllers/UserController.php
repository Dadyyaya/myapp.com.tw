<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // TODO: 要取的model要看清楚，變數也盡量定義清楚，不要搞混你自己要取得的資料
        $users = App\User::all();

        // TODO: 大小括號都要左右對好，不能多也不能少
        foreach ($users as $user) {
            echo $user;
        }
    }
}
