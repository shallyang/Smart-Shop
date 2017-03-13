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

    public function getGetbilling(Request $request)
    {
        $buylist = $request->goodsid;
// echo '<pre>';
        foreach($buylist as $v){

            $goods = explode('+',$v);

            // var_dump($goods);

            $goodsinfo = DB::table('goods_table')->where('goodsid',$goods[0])->first();

            $goodsinfo->num = $goods[1];

            // unset($goodsinfo->describe);


            $buyorder[] = $goodsinfo;

        }

        // dd($buyorder);

        return view('homes.order_reply',['buyorder'=>$buyorder]);

    }
    
}
