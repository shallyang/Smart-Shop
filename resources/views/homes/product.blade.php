@extends('/homes/muban')
@section('title','商品列表')
@section('content')
	<ol class="breadcrumb breadcrumb1">
		<li><a href="index.html">主页</a></li>
		<li class="active"></li>
	</ol> 
	<div class="clearfix"> </div>
	<!-- //breadcrumbs -->
	<div class="product-top">
		<h4>Electronics</h4>
		<ul> 
			<li class="dropdown head-dpdn">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Filter By<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Low price</a></li> 
					<li><a href="#">High price</a></li>
					<li><a href="#">Latest</a></li> 
					<li><a href="#">Popular</a></li> 
				</ul> 
			</li>
			<li class="dropdown head-dpdn">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Brands<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="#">Samsung</a></li> 
					<li><a href="#">LG</a></li>
					<li><a href="#">Sony</a></li> 
					<li><a href="#">Other</a></li> 
				</ul> 
			</li>
		</ul> 
		<div class="clearfix"> </div>
	</div>
	<div class="products-row">

			@foreach($row as $k => $v)


		<div class="col-md-3 product-grids"> 
			
			<div class="agile-products">
			
				<a href="single.html"><img src="" class="img-responsive" alt="img" width='100%'></a>
			
				<div class="agile-product-text">              
					<h5><a href="single.html">{{$v->goodsname}}</a></h5> 
					<h6>¥{{$v->goodsprice}}</h6> 
					<form action="#" method="post">
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1"> 
						<input type="hidden" name="w3ls_item" value="Audio speaker"> 
						<input type="hidden" name="amount" value="100.00">
						<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
					</form> 
				</div>

			</div> 	
			
		</div>
		@endforeach
		<div class="clearfix"> </div>
	</div>
@endsection