<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class AdminLoginController extends Controller
{
    public function postLogin(Request $request)
    {
		//获取登录页面的用户信息
		$username = $request->input('username');
		$password = $request->input('password');


		//获取数据库的用户信息
		$userpassword = DB::table('user_table')->where('username',$username)->value('userpassword');
		


		if($password == $userpassword){
			echo '这是后台首页';
			session(['name'=>'username']);
		}else{
			// echo '密码输入不正确';
			return view('admins/login');
		}
					




    }
}
