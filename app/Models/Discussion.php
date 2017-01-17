<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'last_user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);  //外键默认user_id，如果指定其他外键需通过第二个参数传入
    }
}
