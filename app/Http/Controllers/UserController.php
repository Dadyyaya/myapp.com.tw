<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = App\User::all();

        foreach ($users as $user) {
            echo $user;
        }
        }
    }
}
