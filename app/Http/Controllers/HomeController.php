<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class HomeController extends Controller
{
    /**
     * 首页
     */

    public function getIndex(Request $request)
    {
    	$res = DB::table('goods_type')->
       select(DB::raw("*,concat(pathid,',',id) as paths"))->
            orderBy('paths')->get();
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
   
}
