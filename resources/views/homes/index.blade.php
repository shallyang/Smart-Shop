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
					<ul id="myTab" class=" nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="" class="shows" role="tab" data-toggle="tab" >
							<i class="fa fa-laptop" aria-hidden="true"></i> 
							<h5>数码家电</h5>
						</a></li>
						<li role="presentation"><a href="" role="tab" class="shows" data-toggle="tab"> 
							<i class="fa fa-female" aria-hidden="true"></i>
							<h5 id='19'>女装品牌</h5>
						</a></li>
						<li role="presentation"><a href="" role="tab" class="shows" data-toggle="tab"> 
							<i class="fa fa-gift" aria-hidden="true"></i>
							<h5>撩妹必备</h5>
						</a></li>
						<li role="presentation"><a href="" role="tab" class="shows" data-toggle="tab"> 
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>美丽之家</h5>
						</a></li>
						<li role="presentation"><a href="" role="tab" class="shows" data-toggle="tab"> 
							<i class="fa fa-motorcycle" aria-hidden="true"></i>
							<h5>生活旅行</h5>
						</a></li> 
					</ul>
					<div class="clearfix"></div>
					<h3 class="w3ls-title">品牌头条</h3>
					<!-- 底部展示部分 -->
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
								@foreach($rel as $k=>$v)
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="products.html"><img src="{{$imgs[$k]->picurl}}" alt="img" width='100%'></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html">{{$v->goodsname}}</a></h4>
												<p>{{$v->goodscolor}}</p>
												<h5>{{$v->goodsprice}}</h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="Audio speaker" /> 
													<input type="hidden" name="amount" value="200.00" /> 
													<button type="submit" class="w3ls-cart" >
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
	<script type="text/javascript">
	function res(a){
	$('.shows').click(function(){
		//获取一个商品类的值
		var id = $(this).parent().find('H5').attr('id');
		//通过获得的值来发送ajax
		$.ajax({
				url:'/goods/find',
				data:{id:id},
				type:'GET',
				dataType:'json',
				success:function(data){
				//将最后一个合并的数组弹出
				var imgs = data.pop();
				// console.log(imgs);
				//获取显示框的div
					//设置图片
				for(var i in imgs){
					var html = '<div class="item"> <div class="glry-w3agile-grids agileits"> <a href="products.html"><img src="'+imgs[i].picurl+'" alt="img" width="100%"></a> <div class="view-caption agileits-w3layouts"> <h4><a href="products.html">{{$v->goodsname}}</a></h4> <p>{{$v->goodscolor}}</p> <h5>{{$v->goodsprice}}</h5> <form action="#" method="post"> <input type="hidden" name="cmd" value="_cart" /> <input type="hidden" name="add" value="1" /> <input type="hidden" name="w3ls_item" value="Audio speaker" /> <input type="hidden" name="amount" value="200.00" /> <button type="submit" class="w3ls-cart" > <i class="fa fa-cart-plus" aria-hidden="true"></i>加入购物车</button> </form> </div> </div> </div>';
					$('#owl-demo').append(html);
				}

				
				},
				error:function(request){
					alert('系统查询出错');
				},
				async:true
		});
	})
}

	</script>
@endsection