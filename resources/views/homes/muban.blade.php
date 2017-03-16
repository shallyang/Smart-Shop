<?php

$cates = \App\Http\Controllers\HomeController::getCate(0);
$webconf = DB::table('web_config_table')->first();
// var_dump($webconf);
if ($webconf->open) {
	# code...
	return view('errors.503');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="{{$webconf->description}}" />
<meta name="Keywords" content="{{$webconf->keywords}}" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="/css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style --> 
<link href="/css/ken-burns.css" rel="stylesheet" type="text/css" media="all" /> <!-- banner slider --> 
<link href="/css/animate.min.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- 购物车样式 -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<!-- js -->
<script src="/js/jquery-2.2.3.min.js"></script> 

<!-- 购物车样式 -->
<style type="text/css">
	.mws-panel {
    margin-bottom: 32px;
    box-shadow: 0px 3px 3px -2px rgba(0, 0, 0, 0.15);
	}


	.grid_8 {
	    width: 98.0%;
	}

	.grid_8 {
	    float: left;
	    position: relative;
	    margin-left: 1%;
	    margin-right: 1%;
	}

	div {
	    display: block;
	}
</style>
<!-- //js --> 
<!-- web-fonts -->
<!-- <link href='http://fonts.useso.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'> -->
<!-- web-fonts --> 
<script src="/js/owl.carousel.js"></script>  
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({ 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds 
	  items :4,
	  itemsDesktop : [640,5],
	  itemsDesktopSmall : [480,2],
	  navigation : true
 
	}); 
}); 
</script>
<script src="/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="/js/move-top.js"></script>
<script type="text/javascript" src="/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<script src="/js/bootstrap.js"></script>	
</head>
<body style="background:#FFF">

	<script>
		$('#myModal88').modal('show');
	</script> 
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="/home">Smart网上超市</a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
				@section('person')
					@if(session('user'))
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>{{session('user')['username']}}<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="/user/order">我的订单</a></li>
							<li><a href="/home/out">退出</a></li>
						</ul> 
					</li> 
					@else
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>登录<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('home/login')}}">我的账户</a></li> 
							<li><a href="{{ url('home/register')}}">创建用户</a></li> 
						</ul> 
					</li> 
					@endif
				@show 
					<li class="dropdown head-dpdn">
						<a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> 帮助</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="/home"><span>S</span>mart</a></h1>
					<h6>你的超市. 你的地盘.</h6> 
				</div>	
				@section('search')
				<div class="header-search">
					<form action="/goods/search" method="post">
						<input type="search" name="Search" placeholder="请输入需要搜索的商品" required="" @if(isset($name))value='{{$name}}' @endif>
						{{csrf_field()}}
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				@show
				<div class="header-cart"> 
					<div class="my-account">
						<a href="/home/content"><i class="fa fa-map-marker" aria-hidden="true"></i> 联系我们</a>						
					</div>
					<div class="cart">
						
						<a href="/order/selectcart"><button class="w3view-cart" type="submit" name="submit" value="提交" id="shopcar"><i class="fa fa-cart-arrow-down"></i></button></a>
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">商品分类</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
								<ul class="cd-dropdown-content"> 
									@foreach($cates as $k=>$v)

									<li class="has-children">

										<div><a>{{$v->name}}</a></div>
									 	<ul class="cd-secondary-dropdown is-hidden">
											@foreach($v->nu as $vk=>$vs)
												<a href="/goods/index/{{$vs->id}}">{{$vs->name}}</a> 
												@foreach($vs->nu as $lk=>$lv)
												<li><div><a href="/goods/index/{{$lv->id}}">{{$lv->name}}</a></div></li>
												@endforeach
											@endforeach
										</ul>
									</li>
									@endforeach
								</ul>
							<!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				<div class="move-text">
					<div class="marquee"><a href="offers.html"> 欢迎光临本网站 <span>今日特价商品 </span></a></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<style type="text/css">
		/*购物车样式
		#shopcarlist{background:lightblue;position:fixed;z-index:9999;display:none;left:1050px;top:150px;}
		#closeshopcar{float:right;cursor:pointer;padding-right:4px;color:red;}*/

	</style>

	<!-- //header -->	
	<!-- banner -->
	@section('content')    
				
    @show
	<!-- //deals --> 
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4> 免费送货</h4>
						<p> 单笔购物满188元享受我司提供的免费送货服务,足不出户让你享受互联网的便捷服务!</p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4> 顾客关怀</h4>
						<p> 为您提供最周到的服务,想您所想,爱您所爱! </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4> 备受好评</h4>
						<p> 为您提供最优质的货物,如有质量问题直接退款,无需退货! </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top --> 
	<!-- subscribe -->

	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>S</span>mart </a></h2>
						<h6>你的超市,你的地盘.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 北京,昌平,回龙观.</li>
						<li><i class="fa fa-mobile"></i> 188 8888 8888 </li>
						<li><i class="fa fa-phone"></i> +86 010-1234567 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>公司详情</h3>
						<ul>
							<li><a href="/home/about">关于我们</a></li>
							<li><a href="marketplace.html">公司位置</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>售后服务</h3>
						<ul>
							<li><a href="/home/content">联系我们</a></li>
							<li><a>申请退款</a></li> 
							<li><a href="/home/faq">常见问题</a></li>
							<li><a>订单状态</a></li>
						</ul> 
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>{{$webconf->copyright}}</p>
		</div>
	</div> 
	<!-- cart-js -->
 	<script type="text/javascript">
 	// alert($);
 	// 	$('#shopcar').click(function(){

		// 	$('#shopcarlist').show().animate({

		// 		width:'960px',
		// 		height:'400px',
		// 		left:'150px',
		// 		top:'150px'

		// 	},1000);
		// 	$('#carlist').show();
		// 	$('#closeshopcar').show();
		// 	// var i = 0;
 	// 		$.get('/order/selectcart', function(data) {
 				
 	// 			if (data) {
 	// 				// console.log(data);
 	// 				for(var i=0 ;i <= data.length; i++){
 	// 					console.log(data[i]);
 	// 				}
 	// 			}else{
 	// 				console.log('购物车为空');
 	// 			}
 	// 		},'json');
 	// 	});

 	// 	$('#closeshopcar').click(function(){

 	// 		$('#shopcarlist').animate({

		// 		width:'0px',
		// 		height:'0px',
		// 		left:'1050px',
		// 		top:'150px'

		// 	},1000);
		// 	$('#closeshopcar').hide();
		// 	$('#carlist').hide(1000);
		// });	
 	</script>
	<!-- //cart-js -->	
	<!-- countdown.js -->	
	<script src="/js/jquery.knob.js"></script>
	<script src="/js/jquery.throttle.js"></script>
	<script src="/js/jquery.classycountdown.js"></script>
	<!-- //countdown.js -->
	<!-- menu js aim -->
	<script src="/js/jquery.menu-aim.js"> </script>
	<script src="/js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
    @section('js')

    @show
</body>
</html>