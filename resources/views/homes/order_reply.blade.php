@extends('/homes/muban')
@section('title','提交订单')
<style type="text/css">
	.w {
    width: 990px;
    margin: 0 auto;
}
</style>
@section('content')

<div class="mws-panel grid_4" style="margin-top:20 auto;width:1200px;">
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/order/inputorder" method="post">
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">收货地址:</label>
                    <div class="mws-form-item">
                    @foreach($addr as $k=>$v)
                        <button type="button" class="btn addrs" style="margin:3px;@if($k == 0)border:1px solid red;@endif" addr="{{$v}}" >{{$v}}</button>
                    @endforeach
                    <input type="hidden" name="addr" value="{{$addr[0]}}">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">支付方式:</label>
                    <div class="mws-form-item">
                        <button type="button" class="btn paymethod" value="0">余额支付</button>
                        <button type="button" class="btn paymethod" value="1" style="border:2px solid red">支付宝</button>
                        <input type="hidden" name="paymethod" value="1">
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">购买清单:</label>
                    @foreach($buyorder as $k => $v)
                    <div class="mws-form-item">
                        <tr>
                        	<td>
                        		
		                    	<img src="{{$v->pic}}" alt="" style="float:left"width="100px" height="100px">
								<a href="/goods/single/{{$v->goodsid}}"><span>{{$v->goodsname}}</span></a><br /><br />
		                        
		                        单价: ¥<span class='money' style="color:red" >{{$v->goodsprice}}</span><br /><br />
		                        数量:<span class="buynum">{{$v->num}}</span>
                                <input type="hidden" name="goodsid[]" value="{{$v->goodsid}}">
                        	</td>
                        
                        </tr>
                        
                    </div>
                    <div style="width:2px;height:10px"></div>
                    @endforeach
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">应付金额:</label>
                    <div class="mws-form-item clearfix" style="float:right;color:red;font-size:2em;margin-right:130px">
                        ¥<span id="total"></span>
                        <input type="hidden" name="total">
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                {{csrf_field()}}
                <input type="submit" value="提交订单" class="btn btn-info" style="margin-left:1000px">
                
            </div>
        </form>
    </div>      
</div>

<div class="clearfix"> </div> 

@endsection

@section('js')
    <script type="text/javascript">
        // alert($);
        //地址的选择
        $('.addrs').each(function(){
            $(this).click(function(){

                // alert(12);
                $('.addrs').css('border','0px');
                $(this).css('border','2px solid red');
                //地址 
                var addrs = $(this).text()
                $(this).parent().find('input').val(addrs);
            });

            // return false;

        });

        //支付方式的遍历
        $('.paymethod').each(function(){
            $(this).click(function(){
                $('.paymethod').css('border','0px');
                $(this).css('border','2px solid red');
                var method = $(this).val();
                $(this).siblings('input').val(method);
            });
        });

        //计算商品数量以及商品总价值
        $(function(){
            var total = 0;
            $('.money').each(function(){
                var mon = $(this).text();
                // var id = $(this).val();
                //购买数量
                var num = $(this).siblings('.buynum').text();
                // alert(num);
                //获取购买商品的id
                var id = $(this).siblings('input').val();
                $(this).siblings('input').val(id + '+' + num);
                //商品总家
                total += parseInt(mon * num);

                $('#total').text(total);
                $('#total').siblings('input').val(total);
            });
        });
    </script>

@endsection