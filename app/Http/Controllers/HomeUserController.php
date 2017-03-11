<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HomeUserController extends Controller
{
    public function getPerson()
    {
        return view('homes/user_person');
    }
    public function getMymoney($id)
    {
        $res = DB::table('user_table')->where('userid',$id)->value('usermoney');
    	return view('homes/user_mymoney',['res'=>$res]);
    }
    public function postMymoneyinsert(Request $request)
    {
        $res = $request->except('_token');
        // var_dump($res);die;
        $pro = DB::table('user_table')->where('userid',$res['id'])->value('usermoney');
        $newmoney = (int)$res['usermoney'] + $pro;
        $tem = DB::table('user_table')->where('userid',$res['id'])->update(['usermoney'=>$newmoney]);
        if($tem){
            return redirect('/user/mymoney')->with('info','充值成功!');
        }else{
            return back()->with('info','充值失败!');
        }
    }
    //订单管理页面
    public function getOrder()
    {
        $res = DB::table('order_table')->get();
        foreach($res as $k=>$v){
            $arr = explode(',',$v->goodsid);
            foreach($arr as $ks=>$vs){                 
                $img = DB::table('goods_pic_table')->where('goodsid',$vs)->value('picurl');
                $imgs[] = $img;                
            }            
            $pics[] = $imgs;
            $imgs = null;
        }
        // echo '<pre>';
        // var_dump($pics);die;
    	return view('homes/user_order',['res'=>$res,'pics'=>$pics]);
    }
    //订单处理
    public function postOrderchange()
    {

    }
    public function getInfo()
    {   

    	return view('homes/user_info');
    }
    public function postInfoupdate(Request $request)
    {
        $res = $request->except('_token','userhead','province','city');
        $names = rand(111111,999999).time();
        if($request->hasFile('userhead')){             
             $suffix = $request->file('userhead')->getClientOriginalExtension();
            $request->file('userhead')->move('./upload/',$names.'.'.$suffix);            
        }
         $pro = ['安徽','河北','河南','山西'];
         $ct = [
            ['亳州','合肥','蚌埠'],
            ['石家庄','保定','秦皇岛'],
            ['郑州','开封','荥阳'],
            ['运城','太原','大同']
            ];
        $res['province'] = $pro[$request->province];
        $res['city'] = $ct[$request->province][$request->city];
        $res['userhead'] = '/upload/'.$names.'.'.$suffix;
        $pro = DB::table('user_table')->where('userid',8)->update($res);
        if($pro){
            return redirect('/user/person')->with('info','修改成功!');
        }else{
            return back()->with('info','修改失败!');
        }
    }
    public function getCollectgoods()
    {
    	return view('homes/user_collectgoods');
    }
    public function getCollectshop()
    {
    	return view('homes/user_collectshop');
    }
    public function getOpinion()
    {
    	return view('homes/user_opinion');
    }
    public function getAddress()
    {
        $res = DB::table('user_address')->get();
        // var_dump($res);
    	return view('homes/user_address',['res'=>$res]);
    }
    public function postAddressinsert(Request $request)
    {
        $res = $request->except('_token');   
         $pro = ['安徽','河北','河南','山西'];
         $ct = [
            ['亳州','合肥','蚌埠'],
            ['石家庄','保定','秦皇岛'],
            ['郑州','开封','荥阳'],
            ['运城','太原','大同']
            ];
        if(empty($request->status)){
            $res['status'] = '0';
        }
        // var_dump($res);die;
        $res['province'] = $pro[$request->province];
        $res['city'] = $ct[$request->province][$request->city];
        $tem = DB::table('user_address')->insert($res);
        if($tem){
            return redirect('/user/person')->with('添加成功！');
        }else{
            return back()->with('添加失败!');
        }            
    }
        
}
