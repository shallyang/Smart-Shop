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

                //吧查询出的三维数组转化形成二维数组
                foreach ($info as $key => $value) {
                    
                    $obj[] = $value;
                }
            }


        }
        // foreach($res as $k=>$v){
        //     //获取子类的主id来获得子商品
        //     $tid =$v->id;
        //     $obj[] = DB::table('goods_table')->where('typeid','=',$tid)->get();
        // }
        //        //获取子类商品的图片信息
        // $gobj =[];
        // // echo'<pre>';
        // // var_dump($obj);die;
        // $row = [];
        // foreach($obj as $gk => $gv){
        //     foreach($gv as $lgk => $lgv){
        //     $row[] = $lgv;
        //     $gid = $lgv->goodsid;
        //     $gobj[] = DB::table('goods_pic_table')->where('goodsid','=',$gid)->first();
        //     }
           
        // }
        // // echo'<pre>';
        // // dd($gobj);
        // return view('homes/product',['row'=>$row,'gobj'=>$gobj]);

        //************************************************************************

        //如果是第一分类.获取所有子版块,然后获取子版块下的所有商品

        //如果是第二级分类.获取所有版块下的所有商品
        // echo '<pre>';
        // dd($obj);


        return view('homes/product',['obj'=>$obj]);
    }

   public function getSingle()
   {

    return view('homes/single');
   }
}
