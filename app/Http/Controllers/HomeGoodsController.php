<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HomeGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex($id)
    {
        //查询包含所传值得所有的子类
        $res = DB::table('goods_type')->where('pid',$id)->get();
        //判断子类深度
        if($res == null){
            $obj = DB::table('goods_table')->where('typeid',$id)->get();
            //为商品查询主图
            foreach ($obj as $k => $v) {
                $v->picurl = DB::table('goods_pic_table')->where('goodsid',$v->goodsid)->value('picurl');
            }
        }else{
            foreach($res as $k=>$v){
                //获取子类的主id来获得子商品
                $typeid = $v->id;

                //通过id获取出子类商品
                $info = DB::table('goods_table')->where('typeid',$typeid)->get();

                //为自类商品添加主图
                foreach ($info as $ks => $vs) {
                    $vs->picurl = DB::table('goods_pic_table')->where('goodsid',$vs->goodsid)->value('picurl');
                }

                //把查询出的三维数组转化形成二维数组
                foreach ($info as $key => $value) {
                    
                    $obj[] = $value;
                }
            }


        }
        return view('homes/product',['obj'=>$obj]);
    }

   public function getSingle($id)
   {
    //通过id来获取商品的详情
    $res = DB::table('goods_table')->where('goodsid','=',$id)->first();
    //通过id来获取商品的图片
    $row = DB::table('goods_pic_table')->where('goodsid','=',$id)->get();
    $obj = [];
    foreach($row as $k=>$v){
        $obj[] = $v;
    }
    //通过得到的pid来匹配同类的其他商品
    $typeid = $res->typeid;
    $sli = DB::table('goods_table')->where('typeid','=',$typeid)->get();
    
    //通过得到的同类商品来获取同类的图片
    $imgs = [];
    foreach($sli as $k=>$v){
         $imgs[] = DB::table('goods_pic_table')->where('goodsid','=',$v->goodsid)->value('picurl');
    }
    //获取评论表里面的信息
    $text = DB::table('review_table')->where('goodsid','=',$id)->orderBy('reciewid','desc')->get();
    $lenght = count($text);
    return view('homes/single',['res'=>$res,'obj'=>$obj,'sli'=>$sli,'imgs'=>$imgs,'text'=>$text,'num'=>$lenght]);
   }
   public function getAjax(Request $request)
   {
        $text = $_GET['tex'];
        $id = $_GET['id'];

           $res = DB::table('review_table')->insert(['goodsid'=>$id,'commnet'=>$text]);
           if($res){
                return 1;
           }
   }
   
   public function getTruecollect(Request $request)
   {
        $goodsid = $_GET['goodsid'];
        $userid = session('user')['userid'];
        $arr['userid'] = $userid;
        $arr['goodsid'] = $goodsid;
        $res = DB::table('collect_table')->where('userid',$userid)->get();
        foreach($res as $k=>$v){
            if($v->goodsid == $goodsid){
                return 1;
            }           
        }
        $pro = DB::table('collect_table')->insert($arr);
        if($pro){
        return redirect('/goods/single/'.$goodsid)->with('info','恭喜你收藏成功');
        }
   }
   //全局搜索
   public function postSearch(Request $request)
   {
        $obj = [];
        $name = $request->input('Search');
        $res = DB::table('goods_table')->where('goodsname','like','%'.$name.'%')->get();
        foreach ($res as $ks => $vs) {
            $vs->picurl = DB::table('goods_pic_table')->where('goodsid',$vs->goodsid)->value('picurl');
        }
        //吧查询出的三维数组转化形成二维数组
        foreach ($res as $key => $value) {
            
            $obj[] = $value;
        }
        return view('homes/product',['obj'=>$obj,'name'=>$name]);

   }
}
