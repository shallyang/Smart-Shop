@extends('/homes/muban')
@section('title','商品详情')
@section('content')
<script src="/js/owl.carousel.js"></script>
<script src="/js/bootstrap.js"></script>
<!--flex slider-->
<script defer src="/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->
<script src="/js/imagezoom.js"></script>
<style type="text/css">
	#detail-21{margin-left:100px;}
	.uls{font-size:20px;}
	#dvs{margin-left:1px;margin-top:20px;}
	#center{text-align:center;}
	.slides{margin-top:-40px;}
	#dv{margin-left:320px;margin-top:-6px;}
	#dvd{margin-left:20px;width:600px;height:80px;border-top:1px solid #ccc;line-height:80px;}
	#user{margin-left:400px;}
	#cont{width:500px;height:100px;text-align:center;line-height:100px;font-size:20px;}
</style>
<div class="products">
	<div class="container">  
			<div class="single-page">
			@if (session('info'))
			    <div class="alert alert-success">
			        {{ session('info') }}
			    </div>
			@endif
				<div class="single-page-row" id="detail-21">
					<div class="col-md-4 single-top-left">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="{{$obj[0]->picurl}}">
									<div class="thumb-image detail_images">
									 <img src="{{$obj[0]->picurl}}" data-imagezoom="true" class="img-responsive" width='970' height='800'></div>
								</li>
								<li data-thumb="{{$obj[1]->picurl}}">
									 <div class="thumb-image"> 
									 <img src="{{$obj[1]->picurl}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="{{$obj[2]->picurl}}">
								   <div class="thumb-image"> 
								   <img src="{{$obj[2]->picurl}}" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 	
							</ul>

						</div>
						
					</div>
					<div class="col-md-6 single-top-right">

						<h3 class="item_name">{{$res->goodsname}}</h3><br>
						<div>
							<ul class='uls'>
								售价:<li>　¥{{$res->goodsprice}}</li><br><br>  
								型号:<li>　{{$res->goodssize}}</span></li><br><br>
								颜色:<li>　{{$res->goodscolor}}</li>
							</ul>	
						</div><br>
						 <div class="quantity clearfix">
						 <span class ='uls'>选择数量:</span>
                            <input type="button" value="-" class="minus">
                            <input type="text" step="1" min="1"  name="num" value="1" title="Qty" class="qty" size="4" />
                            <input type="button" value="+" class="plus">&nbsp; <span>库存 : {{$res->goodsnum}}</span>
                         </div><br>

							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls_item" value="Snow Blower" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button  type="submit" class="w3ls-cart shopcar" goodsid="{{$res->goodsid}}"><i class="fa fa-cart-plus" aria-hidden="true"></i> 加入购物车</button>
						<button class="w3ls-cart w3ls-cart-like    collect" getgoodsid='{{$res->goodsid}}'><i class="fa fa-heart-o" aria-hidden="true"></i>收藏商品</button><br><br>
						
						<div class="bdsharebuttonbox" data-tag="share_1">
						<p>分享一下：</p>
								<a class="bds_mshare" data-cmd="mshare"></a>
								<a class="bds_qzone" data-cmd="qzone" href="#"></a>
								<a class="bds_tsina" data-cmd="tsina"></a>
								<a class="bds_baidu" data-cmd="baidu"></a>
								<a class="bds_renren" data-cmd="renren"></a>
								<a class="bds_tqq" data-cmd="tqq"></a>
								<a class="bds_more" data-cmd="more">　更多</a>
								<a class="bds_count" data-cmd="count"></a>
						</div>

						<script>
							with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
						</script>	
						</div>			
				   <div class="clearfix"> </div>  
				</div>
			</div> 
			<!-- recommendations -->
			<!-- //recommendations --> 
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default" id='center'>
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> 商品描述 <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								{!!$res->goodsdescribe!!}
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title" style="text-align:center">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i>查看评论<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						@if($num !== 0)
							<h4>全部评论:</h4>
							@foreach($text as $k=>$v)
							<conter>
							<div id='dvd'>
								<span>{{$v->commnet}}</span>
							</div>
							</conter>
							@endforeach
						@else
						<div id='cont'>
						<span>亲！商品还未任何评论,等你来抢沙发哟!</span>
						</div>
						@endif
						</div>
					</div>
				</div>
			</div>
			<div class="recommend">
				<h3 class="w3ls-title"> 猜你喜欢 </h3> 
				<script>
					$(document).ready(function() { 
						$("#owl-demo5").owlCarousel({
					 
						  autoPlay: 3000, //Set AutoPlay to 3 seconds
					 
						  items :4,
						  itemsDesktop : [640,5],
						  itemsDesktopSmall : [414,4],
						  navigation : true
					 
						});
						
					}); 
				</script>
				
				<div id="owl-demo5" class="owl-carousel">
				@foreach($sli as $k=>$v)
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<a href="/goods/single/{{$v->goodsid}}"><img src="{{$imgs[$k]}}" alt="img" height='220'></a>
							<div class="view-caption agileits-w3layouts"> 
								<h4><a href="/goods/single/{{$v->goodsid}}">{{$v->goodsname}}</a></h4>
								<h5>¥{{$v->goodsprice}}</h5>		
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" /> 
									<input type="hidden" name="w3ls_item" value="Women Sandal" /> 
									<input type="hidden" name="amount" value="20.00" /> 
									<button class="w3ls-cart shopcar" goodsid="{{$v->goodsid}}"><i class="fa fa-cart-plus" aria-hidden="true"></i>加入购物车</button>
							</div>  	
						</div> 
					</div>
					@endforeach  
				</div>  
				
			</div>

			<!-- //collapse --> 
			<!-- offers-cards --> 
			<!-- //offers-cards -->
		</div>
	</div>
</div>
<script type="text/javascript">

	$("#sends").click(function(){
		//获取评论的值
		var cont = $("#tex").val();
		var id = $("#goodsid").val();
		//如果评论不为空才执行
		if(cont !== ''){

			$.ajax({
					url:'/goods/ajax',
					data:{tex:cont,id:id},
					// dataType:'json',
					type:'GET',
					success:function(data){
						if(data){
							//location.href='/goods/single/'+id;
							alert('成功');
							// console.log(data);
						}else{
							alert('评论失败');
						}
					},
					error:function(request){
						alert('评论出错');
					},
					async:true
				});

		}
	
	});
</script>
@endsection

@section('js')
<script type="text/javascript">

	$('.shopcar').each(function(){
		$(this).click(function(){
			var goodsid = $(this).attr("goodsid");
			// alert(goodsid);
			$.get('/order/intocart', {goodsid}, function(data) {
				/*optional stuff to do after success */
				// console.log(data);
				var notice = data + '已成功加入购物车!!';
				alert(notice);
			});

		})
		
	});
    setTimeout(function(){

        $('.alert').slideUp(1000);
    },3000);

</script>
<script type="text/javascript">
	var goodsid = $('.collect').attr('getgoodsid');
	console.log(goodsid);
	$('.collect').click(function()
	{
		$.get('/goods/truecollect',{goodsid},function(data)
			{
				if(data){
					alert('该商品已收藏');
				}
			});
	})
</script>
@endsection
