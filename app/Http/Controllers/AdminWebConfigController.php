<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminWebConfigController extends Controller
{
 
    public function getIndex(Request $request)
    {
        return view('admins/webconfig');
       
    }

    public function postInsert(Request $request)
    {

    	// 获取表单传过来的数据
        $res = $request->except('_token','logo');
        if(empty($res['title']) || empty($res['copyright']) || empty($res['description']) || empty($res['keywords'])){
        	return view('admins/webconfig');
        }
       


         //判断文件上传
        if($request->hasFile('logo')) {
            //自定义上传文件的名字
            $names = rand(1111,9999).time();
            //获取上传文件的后缀
            $suffix = $request->file('logo')->getClientOriginalExtension();

            $request->file('logo')->move('./upload/',$names.'.'.$suffix);
       
        }
        //把上传的图片存储到数据库中
        $res['logo'] = '/upload/'.$names.'.'.$suffix;


        //将表单的数据插入数据库
         $pro = DB::table('web_config_table')->update($res);
        //判断结果
        if($pro) {

            // echo '添加成功';
            return redirect('/admin/webconfig')->with('info','修改成功!');
        } else {

            // echo '添加失败';
            return redirect('/admin/webconfig')->with('info','修改失败!');
        }


    }
}
