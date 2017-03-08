<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;


class AdminLoginController extends Controller
{
    public function postLogin(Request $request)
    {
		//获取登录页面的用户信息
		$username = $request->input('username');
		$password = $request->input('password');


		//获取数据库的用户信息
		$userstatus = DB::table('user_table')->where('username',$username)->value('userstatus');
		if ($userstatus == 0) {
			$userpassword = DB::table('user_table')->where('username',$username)->value('userpassword');
		
			if($password == $userpassword){
			// if(Hash::check($password,$userpassword)){
				$userhead = DB::table('user_table')->where('username',$username)->value('userhead');
				//session 内容
				// 设置过期时间 单位：分钟
				// 设置浏览器关闭是是否清空session
				session(['name'=>$username,'userhead'=>$userhead]);
				return redirect('/admin');
			}else{
				// echo '密码输入不正确';
				return back()->with('info','用户名和密码不匹配');
			}
					
		} else {
			//退会到登录页			
			return back()->with('info','用户名和密码不匹配');
		}

    }
}
