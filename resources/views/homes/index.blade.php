@extends('homes.muban')
@section('title','Smart-正品低价、品质保障、配送及时、轻松购物！')
@section('content')
<div class="banner">
	<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
		<!-- Wrapper-for-Slides -->
        <div class="carousel-inner" role="listbox">  
            <div class="item active"><!-- First-Slide -->
                <img src="/images/lunbo4.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <a href="/goods/index/50"><h3 data-animation="animated flipInX">时尚前沿春季新款</h3></a>
                    <h4 data-animation="animated flipInX">NEW FASHION</h4>
                </div>
            </div>  
            <div class="item"> <!-- Second-Slide -->
                <img src="/images/lunbo2.jpg" alt="" class="img-responsive" />
                <div class="carousel-caption kb_caption kb_caption_right">
                    <a href="/goods/index/37"><h3 data-animation="animated fadeInDown">春潮焕新季，时尚轻奢范</h3></a>
                    <h4 data-animation="animated fadeInUp">没有丑男人只有懒男人</h4>
                </div>
            </div>

            <div class="item"><!-- Third-Slide -->
                <img src="/images/lunbo3.jpg" alt="" class="img-responsive"/>
                <div class="carousel-caption kb_caption kb_caption_center">
                    <a href="/goods/index/46"><h3 data-animation="animated fadeInLeft">打造不一样的女王范</h3></a>
                    <h4 data-animation="animated flipInX">美丽是你自己的</h4>
                </div>
            </div>
        </div> 
        <!-- Left-Button -->
        <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
			<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a> 
        <!-- Right-Button -->
        <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
            <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> 
    </div>
	<script src="/js/custom.js"></script>
</div>
	<div class="welcome"> 
		<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<div class="clearfix"></div>
					<h3 class="w3ls-title">新品首发</h3>
					<!-- 底部展示部分 -->
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
								@foreach($row as $k=>$v)
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="/goods/single/{{$v->goodsid}}"><img src="{{$imgs[$k]->picurl}}" alt="img" width='230px' height='250px'></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="/goods/single/{{$v->goodsid}}">{{$v->goodsname}}</a></h4>
												<p>{{$v->goodscolor}}</p>
												<h5>{{$v->goodsprice}}</h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="200.00" /> 
													<button type="submit" class="w3ls-cart  intocart" goodsid="{{$v->goodsid}}">
													<i class="fa fa-cart-plus" aria-hidden="true"></i>加入购物车</button>
												</form>  
											</div>   
										</div>   
									</div>
									@endforeach
								</div> 
							</div>
						</div>
					</div>   
				</div>  
			</div>  	
		</div>  	
	</div> 
@endsection
<!-- 购物车js -->
@section('js')
<script type="text/javascript">

	$('.intocart').each(function(){
		$(this).click(function(){
			var goodsid = $(this).attr("goodsid");
			// alert(goodsid);
			$.get('/order/intocart', {goodsid}, function(data) {
				/*optional stuff to do after success */
				// console.log(data);
				var notice = data + '已成功加入购物车!!';
				alert(notice);

			});

			return false;
		})
		
	});
</script>
@endsection