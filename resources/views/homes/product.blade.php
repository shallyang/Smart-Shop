@extends('/homes/muban')
@section('title','商品列表')
@section('content')
<div class="clearfix"></div>
<!-- //breadcrumbs -->

<div class="products-row">
	@foreach($obj as $k=>$v)
	<div class="col-md-3 product-grids"> 		
		<div class="agile-products">
			<a href="/goods/single/{{$v->goodsid}}"><img src="{{$v->picurl}}" alt="商品图片" width='280' height='300'></a>
			<div class="agile-product-text">              
				<h5><a href="/goods/single/{{$v->goodsid}}">{{$v->goodsname}}</a></h5> 
				<h6>¥{{$v->goodsprice}}</h6>
				<button type="submit" class="w3ls-cart pw3ls-cart intocart" goodsid="{{$v->goodsid}}">
					<i class="fa fa-cart-plus" aria-hidden="true"> 加入购物车</i>
				</button>
			</div>
		</div> 	
	</div>
	@endforeach
	<div class="clearfix"> </div>
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


		})
		
	});

</script>
@endsection
