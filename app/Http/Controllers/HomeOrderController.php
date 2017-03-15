<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;


class HomeOrderController extends Controller
{
    /**
     *购物车
     */
    public function getIntocart(Request $request)
    {
    	$goodsid = $request->goodsid;
    	session()->push('cart',$goodsid);

    	// echo json_encode(session('cart'));
    	$goodsname = DB::table('goods_table')->where('goodsid',$goodsid)->value('goodsname');

    	echo $goodsname;
    }

    public function getSelectcart()
    {
    	$cartall = session('cart');
        // dd($cartall);
        if ($cartall == null) {
            $carts = null;
            return view('homes.cart',['carts' => $carts]);            
        }
    	
		$cart = array_count_values($cartall);
    	// $cart = array_unique($cartall);


    	// dd($cart);
    	// echo '<pre>';
    	// $carts = ['goodspic','goodsname','goodsprice','goodsnum']
    	$carts = [];
    	$cartlist = [];
    	foreach ($cart as $k =>$v) {

    		$goods = DB::table('goods_table')->where('goodsid',$k)->first();
    		$goodspic = DB::table('goods_pic_table')->where('goodsid',$k)->value('picurl');
    		$cartlist = ['goodsid'=> $k, 'goodspic'=>$goodspic, 'goodsname'=>$goods->goodsname, 'goodsprice'=>$goods->goodsprice,'goodsnum'=>$v];
			$carts[] = $cartlist;

    	}
		
		// echo json_encode($carts);
		// dd($carts);
		return view('homes.cart',['carts'=>$carts]);
	}

	public function getCartlist(Request $request)
	{
		$id = $request->id;

		// echo '123',$id;
		$res = \Session::get('cart');
		// dd($res);
    	// echo '<pre>';
    	// var_dump($res);

    	//从session中进行删除
    	foreach($res as $k => $v) {

    		if($v == $id) {

    			\Session::forget('cart.'.$k);

    			return '1';

    		}

    	}

    	return '0';

	}
//提交订单页面写在路由里面
    public function billing(Request $request)
    {
        $buylist = $request->goodsid;
// echo '<pre>';
        foreach($buylist as $v){

            $goods = explode('+',$v);

            // var_dump($goods);
            //查询商品信息
            $goodsinfo = DB::table('goods_table')->where('goodsid',$goods[0])->first();
            $goodsinfo->pic = DB::table('goods_pic_table')->where('goodsid',$goods[0])->value('picurl');

            $goodsinfo->num = $goods[1];

            // unset($goodsinfo->describe);


            $buyorder[] = $goodsinfo;

        }

        //用户信息 用户地址
        $userid = session('user')['userid'];
        $useraddrs = DB::table('user_address')->where('userid',$userid)->get();
        // dd($buyorder);
        $i = 1;
        foreach($useraddrs as $k => $v){
            if ($v->status == 1) {

                $addr[0] = $v->name.' '.$v->province.$v->city.$v->street.' '.$v->phone;
            }
            $addr[$i] = $v->name.' '.$v->province.$v->city.$v->street.' '.$v->phone;

            $i++;
        }
        // dd($buyorder);

        return view('homes.order_reply',['buyorder'=>$buyorder,'addr'=>$addr]);

    }

    public function postInputorder(Request $request)
    {
        //获取需要填入数据库的值
        $res['userid'] = session('user')['userid'];
        $res['passstatus'] = 0;
        $res['ordertime'] = time();
        $buyGoods = $request->input('goodsid');
        // var_dump($buyGoods);die;
        $addr = $request->input('addr');
        $res['orderprice'] = $request->input('total');
        // dd($orderprice);
        //切割商品编号
        $goodsid = '';
        foreach ($buyGoods as $value) {
            # code...
            $goodid = explode('+',$value)[0];
            $goodsid = $goodsid . ',' . $goodid;
        }
        $res['goodsid'] = substr($goodsid,1);

        //切割地址

        $res['getaddress'] = explode(' ',$addr)[1];
        $res['getphone'] = explode(' ',$addr)[2];
        $res['getman'] = explode(' ',$addr)[0];
        // var_dump($res);die;

        //创建订单 , 插入数据库
        $res = DB::table('order_table')->insert($res);

        if ($res) {
            
        }else{
            return redirect('/order/selectcart')->with('info','抱歉!!!系统异常,下单失败,请稍后重试!!');
        }

    }
    
}
