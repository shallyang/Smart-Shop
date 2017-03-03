<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{
    //商品类型添加页跳转
    public function getGoodskindadd()
    {
        $res = DB::table('goods_type')->
        select(DB::raw('*,concat(pathid,",",id) as paths'))->
        orderBy('paths')->
        get();
        return view('goods.goodsAdd',['res'=>$res]);
    }

    public function postGoodskindinsert(Request $request)
    {
        $res = $request->except('_token');
        if($request->pid == '0'){
            $res['pathid'] = '0';
        }else{
            $data = DB::table('goods_type')->where('id',$request->pid)->first();
            // var_dump($data);die;
            $res['pathid'] = $data->pathid.','.$data->id;
        }
        // var_dump($res);die;
        $pro = DB::table('goods_type')->insert($res);
        // if($pro){
        //     return redirect();
        // }

    }
    //商品类型添加插入
    // public function postGoodstypeinsert(Request $request)
    // {
    //     $res = $request->except('_token');

    //      if($request->hasFile('goods_typepic')) {
    //         //自定义上传文件的名字
    //         $names = rand(1111,9999).time();
    //         //获取上传文件的后缀
    //         $suffix = $request->file('goods_typepic')->getClientOriginalExtension();

    //         $request->file('goods_typepic')->move('./images/',$names.'.'.$suffix);
    //     }
    //     //把上传的图片存储到数据库中
    //     $res['goods_typepic'] = '/images/'.$names.'.'.$suffix;

    //     $pro = DB::table('goods_type')->insert($res);

    //     if($pro)
    //     {
    //         return redirect('goods/goodstypeindex');
    //     }
    // }
    // //类型列表
    // public function getGoodstypeindex()
    // {        
    //     $res = DB::table('goods_type')->get();
    //     return view('goods.goodsTypeIndex',['res'=>$res]);
    // }
    // //添加子商品页面
    // public function getGoodschildadd($id)
    // {
    //     return view('goods.goodsChildAdd',['id'=>$id]);
    // }
    // //添加子商品
    // public function postGoodschildinsert(Request $request)
    // {
       
    //    $res =  $request->except('_token');
    //    $pro = DB::table('goods_child')->insert($res);
    //    if($pro){
    //         return redirect('goods/goodstypeindex');
    //    }
    // }
        // }
}
