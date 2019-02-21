<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'id', 'user_id', 'name', 'address', 'mobile',
    ];
    
    protected $table = 'user_info';              //讓UserInfo這model對應到user_info這張table
}
