<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) : string
    {
        //TODO 获取参数
        $username = $request->input('username');
        $password = $request->input('password');
        $code = $request->input('code');
        $mobile = $request->input('mobile');

        //TODO 验证参数是否为空
        if (empty($username) || empty($password) || empty($code) || empty($mobile)) {
            return response()->json(['code' => 10001, 'msg' => '参数错误']);
        }

        //TODO 验证用户名是否存在

        //TODO 验证手机验证码

        //TODO 保存用户信息

        //TODO 返回注册成功

        return response()->json(['code' => 200, 'msg' => '注册成功']);
    }

}
