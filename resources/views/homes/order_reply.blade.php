@extends('/homes/muban')
@section('title','提交订单')
<style type="text/css">
	.w {
    width: 990px;
    margin: 0 auto;
}
</style>
@section('content')
<div class="mws-panel grid_4" style="margin-bottom:20 auto;width:1200px;">
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="form_layouts.html">
            <div class="mws-form-inline">
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">收货地址:</label>
                    <div class="mws-form-item">
                        <button class="btn" style="border:1px solid red;">北京市昌平区回龙观羽绒鉴于园区</button>
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">支付方式:</label>
                    <div class="mws-form-item">
                        <button class="btn" style="border:1px solid red;">余额支付</button>
                        <button class="btn" style="border:1px solid red;">支付宝</button>
                        
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">购买清单:</label>
                    <div class="mws-form-item">
                        <tr>
                        	<td>
                        		
		                    	<img src="/upload/1451271488889061.jpg" alt="" style="float:left"width="100px" height="100px">
								<a href="/goods/single/20"><span>商品名称</span></a><br /><br />
		                        
		                        单价: ¥<span class='money'>100</span><br /><br />
		                        <span>数量:1</span>
                        	</td>
                        
                        </tr>
                        
                    </div>
                    <div style="width:2px;height:5px"></div>
                    <div class="mws-form-item">
                        <tr>
                        	
	                    	<td>
                        		
		                    	<img src="/upload/1451271488889061.jpg" alt="" style="float:left"width="100px" height="100px">
								<a href="/goods/single/20"><span>商品名称</span></a><br /><br />
		                        
		                        单价: ¥<span class='money'>100</span><br /><br />
		                        <span>数量:1</span>
                        	</td>
                        </tr>
                        
                    </div>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">应付金额:</label>
                    <div class="mws-form-item clearfix">
                    
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input type="submit" value="提交订单" class="btn btn-info" style="margin-left:1000px">
            </div>
        </form>
    </div>      
</div>
@endsection