<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;

use Auth;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));  //将数据对象转换为关联数组
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:16',
            'email' => 'required|email|unique:users|max:32',  //验证邮箱是否与数据库中重复
            'password' => 'required|confirmed|min:6|max:32'  //验证两次密码是否一致
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        Auth::login($user);  //注册成功后自动登录
        session()->flash('success', '欢迎，你将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);  //链接跳转，并绑定注册数据
    }
}
