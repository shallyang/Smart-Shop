<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class GoodsController extends Controller
{
    //商品类型添加页跳转
    public function getGoodskindadd()
    {
        $res = DB::table('goods_type')->
        select(DB::raw('*,concat(pathid,",",id) as paths'))->
        orderBy('paths')->  
        get();
        foreach($res as $k => $v) {
            ///获取path信息
            $into = explode(',',$v->pathid);
            $level = count($into)-1;
            $v->name = str_repeat('|--',$level).$v->name;
        }
        return view('admins.goodsAdd',['res'=>$res]);
    }

    public function postGoodskindinsert(Request $request)
    {

        // 表单验证
        $this->validate($request, [
                'name' => 'required',             
            ],[
                //自定义错误消息
                'name.required'=>'商品名不能为空',                
            ]);

        $res = $request->except('_token');
        if($request->pid == '0'){
            $res['pathid'] = '0';
        }else{
            $data = DB::table('goods_type')->where('id',$request->pid)->first();
            $res['pathid'] = $data->pathid.','.$data->id;
        }
        $pro = DB::table('goods_type')->insert($res);
        if($pro){
            return redirect('/admin/goods/goodskindindex')->with('info','添加成功!');
        }

    }
    public function getGoodskindindex(Request $request)
    {
       $res = DB::table('goods_type')->
        select(DB::raw('*,concat(pathid,",",id) as paths'))->
        where('name', 'like', '%'.$request->input('name').'%')->
        orderBy('paths')->
        paginate(6);
        // all();

        // dd($res);
         foreach($res as $k => $v) {
            ///获取path信息
            $into = explode(',',$v->pathid);
            $v->num = count($into)-1; 
        }
        return view('admins/goodsindex',['res'=>$res,'request'=>$request]);
    }
    // 转到修改页
    public function getGoodskindedit($id)
    {
        $parname = '';
        $res = DB::table('goods_type')->where('id',$id)->first();
        $info = DB::table('goods_type')->where('id',$res->pid)->first();
        if($res->pid == '0'){
            $parname = '顶级';
        }else{
            $parname = $info->name;
        }

        return view('admins.goodsedit',['res'=>$res,'parname'=>$parname]);
    }
    // 修改数据到数据库
    public function postGoodskindupdate(Request $request)
    {

        $this->validate($request, [
                'name' => 'required',             
            ],[
                //自定义错误消息
                'name.required'=>'商品名不能为空',                
            ]);

        // 获取属性值
        $res = $request->except('_token','id');
        $pro = DB::table('goods_type')->where('id',$request->id)->update($res);
        if($pro) {

            return redirect('/admin/goods/goodskindindex')->with('info','修改成功!');
        } else {

            return back()->with('info','修改失败!');
        }
    }

    public function getGoodskinddelete($id)
    {
        $res = DB::table('goods_type')->where('id',$id)->first();
        $path = $res->pathid.','.$res->id;
        //删除该商品类型下的所有子级
        DB::table('goods_type')->where('pathid','like',$path.'%')->delete();
        //删除该商品类型
        $pro = DB::table('goods_type')->where('id',$id)->delete();
        if($pro){
            return redirect('admin/goods/goodskindindex')->with('info','删除成功!');
        }else{
            return back()->with('info','删除失败!');
        }
    }

        //商品添加页 
    public function getGoodsadd()
    {       
        $res = DB::table('goods_type')->
        select(DB::raw('*,concat(pathid,",",id) as paths'))->
        orderBy('paths')->
        get();
        foreach($res as $k => $v) {
            ///获取path信息
            $into = explode(',',$v->pathid);
            $level = count($into)-1;
            $v->name = str_repeat('|--',$level).$v->name;
        }
        // dd($res);
        return view('admins.add_childgoods',['res'=>$res]);
    }
    // 商品添加数据处理
    public function postGoodsinsert(Request $request)
    {
         $this->validate($request, [

                'goodsname' => 'required',
                'goodsnum' => 'required',
                'goodssize'=>'required',
                'goodsprice'=>'required',
                'goodscolor'=>'required',
                'goodsdescribe'=>'required'

            ],[
                //自定义错误消息
                'goodsname.required'=>'商品名不能为空',
                'goodsnum.required'=>'商品数量不能为空',
                'goodssize.required'=>'商品规格不能为空',
                'goodsprice.required'=>'商品价格不能为空',
                'goodscolor.required'=>'商品颜色不能为空',
                'goodsdescribe.required'=>'商品描述不能为空',
        ]);
        
        $res = $request->except('_token','picurl');
        $id = DB::table('goods_table')->insertGetId($res);
        $goods = [];
        if($request->hasFile('picurl'))
        {
            foreach($request->file('picurl') as $k=>$v)
            {             
                $pic = [];   
                $names = rand(111111,999999) . time();
                $suffix = $v->getClientOriginalExtension();
                 $v->move('./upload/',$names.'.'.$suffix);
                 $pic['goodsid'] = $id;
                 $pic['picurl'] = '/upload/'.$names.'.'.$suffix;
                 $goods[] = $pic;
            }           
        }
        // var_dump($goods);die;
        
        $chi = DB::table('goods_pic_table')->insert($goods);
        if($chi){
            return redirect('admin/goods/goodslist')->with('info','添加成功!');
        }else{
            return back()->with('info','添加失败!');
        }

    }


    public function getGoodslist(Request $request)
    {

        $res = DB::table('goods_table')->where('goodsname','like','%'.$request->input('goodsname').'%')->paginate($request->input('limit',10));
        // dd($res);
        //商品列表
        return view('admins.goodslist',['res'=>$res,'request'=>$request]);
    }

    public function getChangestatus(Request $request)
    {
        //修改上下架
        $goodsstatus = $request->input('goodsstatus') ? 0 : 1 ;

        $res =  DB::table('goods_table')->where('goodsid', $request->input('goodsid'))->update(['goodsstatus'=>$goodsstatus]);
        // dd($res);
        if ($res) {
            return redirect('/admin/goods/goodslist')->with('info','修改成功!');
        } else {
            return redirect('/admin/goods/goodslist')->with('info','修改失败!');
        }
    }


    public function getUpdate($goodsid)
    {
        //跳转商品修改页面
        $res =  DB::table('goods_table')->select()->where('goodsid', $goodsid)->first();
        $typeName = DB::table('goods_type')->select('name')->where('id',$res->typeid)->first();
        $type = DB::table('goods_type')->select()->get();
        // dd($type);
        // dd($res->typeid);
        return view('admins.goodsupdate',['res'=>$res,'typeName'=>$typeName,'type'=>$type]);

    }

    public function getDelete($goodsid)
    {
        //商品删除功能
        // dd($goodsid);
        $res =  DB::table('goods_table')->where('goodsid', $goodsid)->delete();

        if ($res) {
            return redirect('/admin/goods/goodslist')->with('info','删除成功!');
        } else {
            return redirect('/admin/goods/goodslist')->with('info','删除失败!');
        }

    }

    public function postUpdate(Request $request)
    {

        //表单验证
        $this->validate($request, [

                'goodsname' => 'required',
                'goodsnum' => 'required',
                'goodssize'=>'required',
                'goodsprice'=>'required',
                'goodscolor'=>'required',
                'goodsdescribe'=>'required'

            ],[
                //自定义错误消息
                'goodsname.required'=>'商品名不能为空',
                'goodsnum.required'=>'商品数量不能为空',
                'goodssize.required'=>'商品规格不能为空',
                'goodsprice.required'=>'商品价格不能为空',
                'goodscolor.required'=>'商品颜色不能为空',
                'goodsdescribe.required'=>'商品描述不能为空',
        ]);

        //商品修改功能
        $goodsid = $request->input('goodsid');
        $infoArr = $request->except('_token','goodsid');
        // dd($goodsid);

        $res =  DB::table('goods_table')->where('goodsid', $goodsid)->update($infoArr);

        if ($res) {
            return redirect('/admin/goods/goodslist')->with('info','修改成功!');
        } else {
            return redirect('/admin/goods/goodslist')->with('info','修改失败!');
        }

    }
}
