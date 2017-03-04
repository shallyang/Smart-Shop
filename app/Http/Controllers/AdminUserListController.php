<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AdminUserListController extends Controller
{

    public function getIndex(Request $request)
    {
        //获取所要显示的数量和所搜索的值
       $res = DB::table('user_table')->where('username','like','%'.$request->input('search').'%')->Paginate($request->input('num',10));
        return view('/admins/user_list',['row'=>$res,'request'=>$request]);
    }
    //显示修改页面的方法
    public function getEdit($id)
    {
        $res = DB::table('user_table')->where('userid',$id)->first();
        
        return view('/admins/edit_user',['res'=>$res]);
    }
    public function postUpdate(Request $request)
    {
        //表单验证
        $this->validate($request, [

                'userphone'=>'required|regex:/^1[345678]\d{9}$/',
                'useremail'=>'required|email',
                'userqq'=>'required|regex:/^\d{4,13}$/',
                'userhead'=>'required'

            ],[
                //自定义错误消息
                'userphone.required'=>'新手机号不能为空',
                'userphone.regex'=>'新手机号格式不正确',
                'useremail.required'=>'新邮箱不能为空',
                'useremail.email'=>'新邮箱格式不正确',
                'userqq.required'=>'新QQ不能为空',
                'userqq.regex'=>'新QQ格式输入不正确',
                'userhead.required'=>'新上传图片不能为空'
            ]);
        $res = $request->except('_token','id','userhead');
        $names = rand(1111111,999999).time();
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
        $row = DB::table('user_table')->where('userid','=',$request->input('id'))->update($res);
       
        if($row){
            return redirect('/admin/user_list/index')->with('info','恭喜你修改成功');
        }else{

            return redirect('/admin/user_list/index')->with('into','抱歉修改失败');
        }
    }
    //删除的方法
    public function getDelete($id)
    {
        $res = DB::table('user_table')->where('userid','=',$id)->delete();
        if($res){
            return redirect('/admin/user_list/index')->with('info','恭喜你删除成功');
        }else{

            return redirect('/admin/user_list/index')->with('into','
                抱歉删除失败');
        }
    }
}
