<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | 重置密码控制器
    |--------------------------------------------------------------------------
    |
    | 此控制器使用 ResetsPasswords trait 里设定的控制器方法来处理
    | 显示密码重置表单和修改密码动作。
    |
    */

    use ResetsPasswords;

    /**
     * 重置密码表单提交成功的重定向页面
     *
     * @var string
     */
    protected $redirectTo = '/';
}
