@extends('/homes/muban')
@section('title','商品列表')
@section('content')
<div class="clearfix"></div>
<!-- //breadcrumbs -->
<div class="products-row">
	@foreach($obj as $k=>$v)
	<div class="col-md-3 product-grids"> 		
		<div class="agile-products">
			<a href="/goods/single/{{$v->goodsid}}"><img src="{{$v->picurl}}" width="250" height="250" alt="商品图片" ></a>
			<div class="agile-product-text">              
				<h5><a href="/goods/single/{{$v->goodsid}}">{{$v->goodsname}}</a></h5> 
				<h6>¥{{$v->goodsprice}}</h6>
				<button type="submit" class="w3ls-cart pw3ls-cart" class="intocar">
					<i class="fa fa-cart-plus" aria-hidden="true"> 加入购物车</i>
				</button>
			</div>
		</div> 	
	</div>
	@endforeach
	<div class="clearfix"> </div>
</div>
@endsection

<script type="text/javascript">
	alert($);
</script>