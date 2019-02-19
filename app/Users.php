<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use App\Users;

    $user = App\Users::all();

    foreach ($user as $users) {
        
        echo $users;
    }  
}
