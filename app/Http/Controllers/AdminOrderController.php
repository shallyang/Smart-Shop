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
        if ($res) {
            return back()->with('info','订单关闭成功');
        } else {
            return back()->with('info','订单关闭失败,请重试');
        }
    }

    public function getDelete($id)
    {   
        // dd($id);
        $res = DB::table('order_table')->where('orderid','=',$id)->delete();

        if ($res) {
            return back()->with('info','订单删除成功');
        } else {
            return back()->with('info','订单删除失败,请重试');
        }
    }

    public function getGoship($id)
    {
        return view('admins.order_goship',['id'=>$id]);
    }

    public function postGoship(Request $request)
    {
        // echo '1234';
        // return view('admins.order_goship',[])
        // dd($request);
        //获取订单号和快递代码.
        $orderid = $request->orderid;
        // echo $orderid;
        $shippost = $request->shippost;

        $res = $request->except('_token','orderid','shippost');
        //将快递代码改成具体的快递公司
        switch($shippost)
        {
            case 0:
                $res['shippost'] = '顺丰快递';
                break;
            case 1:
                $res['shippost'] = '联邦快递';
                break;
            case 2:
                $res['shippost'] = '京东快递';
                break;
            case 3:
                $res['shippost'] = '邮政快递';
                break;    
        }
        $res['passstatus'] = 1;
        // dd($res);
        $res = DB::table('order_table')->where('orderid','=',$orderid)->update($res);

        if ($res) {
            return redirect('/admin/order')->with('info','发货成功!');
        } else {
            return redirect('/admin/order_goship',['$id'=>$orderid])->with('info','发货失败,请重试!');
        }
    }

    public function getChangeget($id)
    {
        $res = DB::table('order_table')->where('orderid',$id)->select()->first();

        // dd($res);
        return view('admins.order_changeget',['res'=>$res]);
    }

    public function postChangeget(Request $request)
    {
        //删除token 和订单号
        $res = $request->except('_token','orderid');
        //获取订单号
        $orderid = $request->orderid;
        // echo $orderid;
        // dd($res);
        //修改数据
        $res = DB::table('order_table')->where('orderid',$orderid)->update($res);

        if ($res) {
            return redirect('/admin/order')->with('info','修改成功!');
        } else {
            //修改失败将id放回res并跳转到修改页面
            // $res['orderid'] = $orderid;
            // return redirect('/admin/order_changeget',['res'=>$res])->with('info','修改失败,请重试!');
            return redirect('/admin/order')->with('info','修改失败!');
        }

    }
}
