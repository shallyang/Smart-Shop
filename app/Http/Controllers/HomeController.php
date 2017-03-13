<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomeRegisterRequest;
use Gregwar\Captcha\CaptchaBuilder;

use DB;
use Hash;
use Session;
use Mail;
class HomeController extends Controller
{
    /**
     * 首页
     */

    public function getIndex(Request $request)
    {
    	$res = DB::table('goods_type')
            ->select(DB::raw("*,concat(pathid,',',id) as paths"))
            ->orderBy('paths')
            ->get();
        return view('homes/index',['res'=>$res]);
    }
    public static function getCate($pid)
    {
        //先确认顶级信息
        $cates = DB::table('goods_type')->where('pid','=',$pid)->get();
        $obj = [];
        foreach ($cates as $k => $v) {
        //使用递归来实现深度查找
           $v->nu = self::getCate($v->id);
           
           $obj[] = $v;
        }
        return $obj;
    }

    // 登录页
    public function getLogin()
    {
    	return view('/homes/login');
    }

     // 验证码
     public function getVcode()
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 130, $height = 46, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('vcode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

   
    // 判断登录
    public function postLogins(Request $request)
    {
    	$useremail = $request->input('email');
        $password = $request->input('password');
        $a = DB::table('user_table')->value('userpassword');

        // $try = session()->has('email');
        // if($try){
        //     return redirect('/home');
        // }

        // 取出数据库的信息
        $userstatus = DB::table('user_table')->where('userpassword',$password)->value('userstatus');
        // dd($userstatus);die;

        // 判断
        if ($userstatus == 0) {
            $userpassword = DB::table('user_table')->where('userpassword',$password)->value('userpassword');
            if($password == $userpassword){
                 //验证码检测
                if(Session::get('vcode') != $request->input('vcode')) {
                    return back()->with('info','验证码有误');
                }
                //判断是否记住密码
                $rem = $request->input('checkbox');
                // dd($rem);die;
                if($rem == '1'){
                  $ses = Session::put('email','$useremail');
                }

                return redirect('/home');

            }else{   
            //密码不匹配退回到登录页           
                return back()->with('info','密码错误');
            }                   
        } else {         
            return back()->with('info','邮箱和密码不匹配');
        }
    }

    
    //注册页
    public function getRegister(Request $request)
    {
    	return view('/homes/register');
    }

    //判断注册
    public function postRegisters(Request $request)
    {
            
           $this->validate($request, [
                'username' => 'required|regex:/^\S{6,12}$/|unique:user_table',
                'userpassword' => 'required|regex:/^\w{8,12}$/',
                'repassword'=>'required|same:userpassword',
                'useremail'=>'required|email',
            ],[
                //自定义错误消息
                'username.required'=>'用户名不能为空',
                'username.regex'=>'用户名格式不正确',
                'username.unique'=>'用户名已经存在',
                'userpassword.required'=>'密码不能为空',
                'userpassword.regex'=>'密码格式不正确',
                'repassword.required'=>'确认密码不能为空',
                'repassword.same'=>'两次密码输入不一致',
                'useremail.required'=>'用户邮箱不能为空',
                'useremail.email'=>'邮箱格式不正确',
        ]);

          // 验证码检测
          if(Session::get('vcode') != $request->input('vcode')) {
                return back()->with('info','验证码有误');
          }
          //获取值
          $res = $request->except('_token','repassword','vcode');
          $res['userstatus'] = '0';

          $res['token'] = str_random(30);

          $data = DB::table('user_table')->insertGetId($res);
  
          if ($data) {

            // return redirect('/home/login');
            Mail::send('homes.activate', ['id'=>$data,'token'=>$res['token']], function ($m) use ($res){
                $m->from('yxc930708@163.com', 'shopProject');

                $m->to($res['useremail'], $res['username'])->subject('新用户激活提醒');
            });
        }
        return redirect('/home/remind');
    }

    //激活账户
      public function getActivate(Request $request)
    {
        $id = $request->input('id');

        $data = DB::table('user_table')->where('id', $id)->first();

        $token = $request->input('token');

        if($token != $data->token) {

            abort(404);

        }

        $res = [];

        $res['userstatus'] = '1';

        // $pro = DB::table('user_table')->where('id', $id)->update($res);

        if($pro) {

            return redirect('/homes/login');
        }
    }

    public function getRemind()
    {
        return view('/homes/remind');
    }

    // 找回密码页
    public function getBack(Request $request)
    {   
        // $res = DB::table('user_table')->all();
        // return view('homes/getback',['res'=>$res]);
        return view('/homes/getback');
    }

    //判断找回密码
    public function postBacks(Request $request)
    {
        // echo '判断找回密码页';
        $this->validate($request, [
                
                'userpassword' => 'required|regex:/^\w{8,12}$/',
                'repassword'=>'required|same:userpassword',
                'useremail'=>'required|email',
            ],[
                //自定义错误消息
                
                'userpassword.required'=>'密码不能为空',
                'userpassword.regex'=>'密码格式不正确',
                'repassword.required'=>'确认密码不能为空',
                'repassword.same'=>'两次密码输入不一致',
                'useremail.required'=>'用户邮箱不能为空',
                'useremail.email'=>'邮箱格式不正确',
        ]);

          // 验证码检测
          if(Session::get('vcode') != $request->input('vcode')) {
                return back()->with('info','验证码有误');
          }
          //获取值
          $res = $request->except('_token','useremail','repassword','vcode');
          $email = $request->input('useremail');

          $res['userstatus'] = '0';

          $res['token'] = str_random(30);

          $datas = DB::table('user_table')->where('useremail',$email)->first('userid');
          $data = $datas->userid;
  
          if ($data) {
            Mail::send('homes.activate', ['useremail'=>$data,'token'=>$res['token']], function ($m) use ($res){
                $m->from('yxc930708@163.com', 'shopProject');

                $m->to($res['useremail'], $res['username'])->subject('用户密码修改提醒');
            });
        }
        return redirect('/home/remind');
    } 

    public function getTest()
    {
        return view('homes/testemail');
    } 

   

    //检测验证
    public function postTestemail(Request $request)
    {

           $this->validate($request, [
                'useremail'=>'required|email',
            ],[
                'useremail.email'=>'邮箱格式不正确',
        ]);

          
          //获取值
          $res = $request->except('_token');
          // dd($res);
          $res['userstatus'] = '0';

          $res['token'] = str_random(30);
          $email = $request->input('useremail');
          // dd($email);

          $datas = DB::table('user_table')->where('useremail',$email)->first();
          // dd($datas);
          $data = $datas->userid;
          // dd($data);
  
          if ($data) {

            // return redirect('/home/login');
            Mail::send('homes.yactivate', ['id'=>$data,'token'=>$res['token']], function ($m) use ($res){
                $m->from('yxc930708@163.com', 'shopProject');

                $m->to($res['useremail'], $res['username'])->subject('用户验证提醒');
            });
        }
        return redirect('/home/yremind');
    }
}