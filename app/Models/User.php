<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];  //过滤，只有包含在该属性中的字段才能够被正常更新

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];  //敏感信息在用户实例通过数组或 JSON 显示时进行隐藏

    public function gravatar($size = '100')  //gravatar头像
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));  //strtolower转换小写，trim去除前后空格
        return "http://www.gravatar.com/avatar/$hash?s=$size";
    }

    public function setPasswordAttribute($password)  //每次设置密码时会自动调用
    {
        $this->attributes['password'] = bcrypt($password);
    }
}
