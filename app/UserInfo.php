<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    // 讓UserInfo這model對應到user_info這張table
    // TODO: 註解要寫在上面
    protected $table = 'user_info';

    // TODO: 通常這樣寫比較乾淨與清楚
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'address',
        'mobile',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
