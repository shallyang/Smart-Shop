<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Hash;
class AdminUserController extends Controller
{
    public function getIndex()
    {
        return view('/admins/user_list');
    }

    public function getAdd()
    {
        return view('/admins/add_user');
    }
    //添加用户方法
    public function postInsert(Request $request)
    {
        //表单验证
        $this->validate($request, [

                'username' => 'required|regex:/^\S{6,12}$/|unique:user_table',
                'userpassword' => 'required|regex:/^\w{8,12}$/',
                'repassword'=>'required|same:userpassword',
                'userphone'=>'required|regex:/^1[345678]\d{9}$/',
                'useremail'=>'required|email',
                'userqq'=>'required|regex:/^\d{4,13}$/',
                'userhead'=>'required'

            ],[
                //自定义错误消息
                'username.required'=>'用户名不能为空',
                'username.regex'=>'用户名格式不正确',
                'username.unique'=>'用户名已经存在',
                'userpassword.required'=>'密码不能为空',
                'userpassword.regex'=>'密码格式不正确',
                'repassword.required'=>'确认密码不能为空',
                'repassword.same'=>'两次密码输入不一致',
                'userphone.required'=>'用户手机号不能为空',
                'userphone.regex'=>'手机号格式不正确',
                'useremail.required'=>'用户邮箱不能为空',
                'useremail.email'=>'邮箱格式不正确',
                'userqq.required'=>'用户QQ不能为空',
                'userqq.regex'=>'QQ格式输入不正确',
                'userhead.required'=>'上传图片不能为空'
        ]);
        //获取所得到的值 
        $res = $request->except('_token','repassword','userhead');
        
        //检测是否有文件上传
        if($request->hasFile('userhead')){
            //设置上传的图片名字为随机
            $names = rand(111111,999999).time();
            //获取上传图片的后缀
            $suffix = $request->file('userhead')->getClientOriginalExtension();

            $request->file('userhead')->move('./upload/',$names.'.'.$suffix);

        }
        //把路径保存至数据库
        $res['userhead'] = '/upload/'.$names.'.'.$suffix;
        //使用哈希加密
        $res['userpassword'] = Hash::make($request->input('password'));
        
        $row = DB::table('user_table')->insert($res);
        if($row){

            return redirect('/admin/user_list/index')->with('info','恭喜你添加成功');

        }else{

            return redirect('/admin/user/add')->withInput();
        }

    }

    public function getOut()
    {
        session()->flush();
        return redirect('/admin');
    }

    public function getContent(Request $request)
    {
        //搜索
        $res = DB::table('user_content')->where('user_name','like','%'.$request->input('user_name').'%')->paginate($request->input('limit',10));

        return view('admins.user_content',['res'=>$res,'request'=>$request]);

    }

    public function getReplaycontent($id)
    {
        //获取需要回复的条目
        $res = DB::table('user_content')->where('id',$id)->first();

        return view('admins.user_replycontent',['res'=>$res]);

    }

    public function postReplaycontent(Request $request)
    {
        //回复
        $reply = $request->input('reply');
        $id = $request->input('id');
        // $email = $request->input('user_email');

        //信息回复
        Mail::send('admins.email', ['id'=>$request->input('id'),'reply'=>$reply], function ($m)use($request){
                $m->from('yxc930708@163.com', 'Smarty客服部');

                $m->to($request->input('user_email'), $request->input('user_name'))->subject('Smarty回复');
            });
        $res = DB::table('user_content')->where('id',$id)->update(['status'=>1]);

        if ($res) {
            return redirect('/admin/user/content')->with('info','回复成功');
        }else{
            return redirect('/admin/user/content')->with('info','回复失败');
        }

    }


}

