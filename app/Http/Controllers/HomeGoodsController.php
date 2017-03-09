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
        $res = DB::table('goods_type')->where('pid','=',$id)->get();
        //判断子类深度
        $obj = [];
        if($res == null){
            $obj[] = DB::table('goods_table')->where('typeid','=',$id)->get();
         }
        foreach($res as $k=>$v){
            //获取子类的主id来获得子商品
            $tid =$v->id;
            $obj[] = DB::table('goods_table')->where('typeid','=',$tid)->get();
        }
               //获取子类商品的图片信息
        $gobj =[];
        // echo'<pre>';
        // var_dump($obj);die;
        $row = [];
        foreach($obj as $gk => $gv){
            foreach($gv as $lgk => $lgv){
            $row[] = $lgv;
            $gid = $lgv->goodsid;
            $gobj[] = DB::table('goods_pic_table')->where('goodsid','=',$gid)->first();
            }
           
        }
        // echo'<pre>';
        // dd($gobj);
        return view('homes/product',['row'=>$row,'gobj'=>$gobj]);
    }

   
}
