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
        //获取评论的内容

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
    return view('homes/single',['res'=>$res,'obj'=>$obj,'sli'=>$sli,'imgs'=>$imgs,'text'=>$text]);
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
   public function getFind(Request $request)
   {
        $id = $_GET['id'];
        //通过获取到的类id的值来查询其子类
        $res = DB::table('goods_type')->where('pid',$id)->get();
        //通过子类的id来查找子商品
        $obj = [];
        foreach($res as $k=>$v){
            $obj[] = DB::table('goods_table')->where('typeid',$v->id)->get();

        }
        $imgs = [];
        
        foreach($obj as $ks=>$kv){
            foreach($kv as $lk => $lv){

             $imgs[] = DB::table('goods_pic_table')->where('goodsid','=',$lv->goodsid)->first();

            }
       
        }
        // return $obj;
        if($obj && $imgs){
            
            array_push($obj,$imgs);
            return json_encode($obj);
        }

   }
}
