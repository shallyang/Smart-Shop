<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminOrderController extends Controller
{
    /**
     * 订单显示页面,显示所有的订单 
     */
    public function getIndex(Request $request)
    {
        //遍历数据库,取出订单列表
        $res = DB::table('order_table')->where('orderid','like','%'.$request->input('orderid').'%')->paginate($request->input('limit',10));
        //打开所有订单列表
        return view('admins.order',['res'=>$res,'request'=>$request]);
    }

    public function getClose($id)
    {   
        // dd($id);
        $res = DB::table('order_table')->where('orderid',$id)->update(['passstatus'=>4]);

        // if ($res) {
            
        // } else {

        // }
        return back();
    }

    public function getDelete($id)
    {   
        // dd($id);
        $res = DB::table('order_table')->where('orderid','=',$id)->delete();

        // if ($res) {
            
        // } else {
            
        // }
        
        return back();
    }

    
}
