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
        echo'<pre>';
        $obj = [];
        if($res == null){
            $obj[] = DB::table('goods_table')->where('typeid','=',$id)->get();
       }
        var_dump($obj);
        // foreach($res as $k=>$v){
        //     //获取子类的主id来获得子商品
        //     $tid =$v->id;
        //     echo $tid;
        //     $obj[] = DB::table('goods_table')->where('typeid','=',$tid)->get();
        // }
        // echo'<pre>';
        // var_dump($obj);
        return view('homes/product');
    }

   
}
