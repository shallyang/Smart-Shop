<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="/css/safe/css.css" />
		<link rel="stylesheet" href="/css/safe/common.min.css" />
		<link rel="stylesheet" href="/css/safe/ms-style.min.css" />
		<link rel="stylesheet" href="/css/safe/personal_member.min.css" />
		<link rel="stylesheet" href="/css/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="/css/sui.css" />
			<script type="text/javascript" src="/js/jquery-1.9.1.min.js" ></script>
		<script type="text/javascript" src="/js/sui.js" ></script>
		<style>
			progress {
				width: 300px;
				border: 1px solid #ffffff;
				background-color: #e6e6e6;
				color: #0064B4;
				/*IE10*/
			}
			
			progress::-moz-progress-bar {
				background: #FFFFFF;
			}
			
			progress::-webkit-progress-bar {
				background: #ccc;
			}
			
			progress::-webkit-progress-value {
				background: #FF7700;
			}
			a{
				color: #000000;
			}
			.sui-table th, .sui-table td {
		    padding: 16px 8px;
		    line-height: 18px;
		    text-align: center;
		    vertical-align: middle;
		    border-top: 1px solid #e6e6e6;
		    
		}
	 .sui-nav.nav-tabs > .active > a {
	    border:1px #fff solid;
	    background-color: #fff;
	     border-bottom-color: transparent; 
	    cursor: default;
	    font-weight: normal;
	    color: #F2873B;
		}
		.sui-nav.nav-tabs > li > a {
		    color: #333333;
		    line-height: 18px;
		    -webkit-border-radius: 3px 3px 0 0;
		    -moz-border-radius: 3px 3px 0 0;
		    border-radius: 3px 3px 0 0;
		    border: 1px #fff solid;
		    border-bottom: 1px #fff solid;
		    height: 30px;
		    width: 80px;
		    text-align: center;
		    padding-top: 10px;
		    font-size: 14px;
		}
		.sui-nav.nav-tabs {
		    border-bottom: 1px solid #CECECE;
		    padding-left: 5px;
		}
		/*.sui-nav.nav-tabs > .active > a:hover {
			  font-weight: bold;
		    cursor: default;
		    font-weight: bold;
		    color: #F37B1D;
		}*/
		.sui-nav.nav-tabs > li {
		    margin-bottom: -1px;
		     background-color: #fff; 
		     border-bottom: 1px #ccc solid;
		}
		.sui-nav.nav-tabs > .active {
		    border-bottom: 0;
		}
		.sui-nav.nav-tabs > li + li {
		    margin-left: -3px;
		}
		</style>
	</head>

	<body class="ms-body">
		<div id="" class="ng-top-banner"></div>	
		
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
				<div class="side-neck" style="margin-top: 20px;">
						<i></i>
					</div>
					<div class="ms-side" style="margin-top: 20px;" >
						<article class="side-menu side-menu-off">
							<dl class="side-menu-tree" style="padding-left: 50px;">
								<dt><img src="/img/左侧/file.png"  style="margin-right: 10px;margin-left: -20px;"/>订单管理</dt>
								<dd>
									<a href="/user/order">订单管理</a>

								</dd>
								<dd>
									<a href="/user/mymoney">我的钱包</a>

								</dd>								
								<dt><img src="/img/左侧/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/>账户管理</dt>
								<dd>
									<a href='/user/info'>我的资料</a>

								</dd>
								<dd>
									<a href='/user/collectgoods'>宝贝收藏</a>
								</dd>
								<dd>
									<a href='/user/collectshop'>店铺收藏</a>
								</dd>
								
								<dt><img src="/img/左侧/v-card-3.png"  style="margin-right: 10px;margin-left: -20px;"/>售后服务</dt>					
								<dd>
									<a href='/user/opinion'>意见/投诉</a>

								</dd>
							</dl>

							<a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
						</article>
					</div>
				</div>
				<div class="cont-main">
					<div class="main-wrap mt15" style="border: 0px;">
						      <ul class="sui-nav nav-tabs" style="margin-top:0px;width: 1000px;margin-left: 30px;">
								  <li   style="margin-left: -5px;"><a href="#profile" data-toggle="tab">所有订单<span style="margin-left: 20px;color: #ccc;">|</span></a></li>
								  
								</ul>
							<div class="profile-info">
								<div class="control-group clearfix " style="width: 1020px;margin-bottom: 0px;">
									<div style="margin-top: -60px";>
                                        <div style="float:right;display: inline;margin-left:60px;display: inline-block;height: 25px;margin-right: -5px;padding-top: 10px;"> 
									    <img src="/img/trash-拷贝.png"  style="height: 10px;width: 10px;" />
									           <font style="">订单回收站</font>
                                        </div> 
									 </div>
									
								</div>
							</div>
							<div style="margin-left: 30px;height: 25px;" >
								<input  type="text"  placeholder="输入商品标题或者订单号进行搜索 " style="width: 200px;height: 25px;font-size: 12px;" />
								<button style="height: 100%;margin-left: -5px;border: 1px #ccc solid;font-size: 12px;color:#353535;background-color: #f2f2f2;width: 100px;">订单搜索</button>
							    <span style="margin-left: 5px;">更多搜索条件</span>
							</div>
							
							<div class="tab-content" style="width: 1000px;margin-top: 10px;border:1px #fff solid; border-top:transparent;margin-left: 30px;">
								  <div id="index" class="tab-pane " style="padding: 40px 30px;">
								  </div>
								 <div id="profile" class="tab-pane active" style="padding: 00px 00px;">
								 <div style="width: 100%;height: 50px;border: 1px #ccc solid;line-height: 50px;background-color: #fdfdfd">
								 	<span style="color: #858585;margin-left: 160px;">宝贝</span>
								 	<span style="color: #858585;margin-left: 190px;">单价(元)</span>
								 	<span style="color: #858585;margin-left: 29px;">数量</span>
								 	<span style="color: #858585;margin-left: 45px;">收货地址</span>
								 	<span style="color: #858585;margin-left: 100px;">实付款(元)</span>
								 	<span style="color: #858585;margin-left: 45px;">交易状态</span>
								 	<span style="color: #858585;margin-left: 45px;">交易操作</span>
								 </div>
								 <div style="width: 100%;height: 0px;padding: 10px;">
								 	<span style="line-height: 20px;">全选</span>
								 	<input type="button" value="批量确认收货"  style="padding: 2px;border: 1px #ccc solid;background-color: #fff;color: #ccc;margin-left: 20px;"/>
								    <div style="float: right;margin-right: 5px;">
								    	<input type="button"  style="display: inline-block;background-color: #fff; background-image: url(img/我的订单/组-39.png);width: 20px;height: 20px;border: 0px;background-repeat: no-repeat;" />
								    	<input type="button" style="border:0px;display: inline-block;background-color: #fff;background-image: url(img/我的订单/组-40.png);background-repeat: no-repeat;width: 58px;height: 20px;" />
								    </div>
								 </div>
								 @foreach($res as $k=>$v)
								 <div style="margin-top: 30px;width: 100%;height: 250px;border: 1px #addff8 solid;">
								 <div style="width: 100%;height: 50px;background-color: #eaf9ff;vertical-align: middle;font-size: 12px;">
								<input type="checkbox" style="line-height: 50px;margin-left: 20px;"/>
								<span style="line-height: 50px;">2016-04-02</span>
								<span style="line-height: 50px;margin-left: 20px;">订单号：{{$v->orderid}}</span>
								<span style="line-height: 50px;margin-left: 100px;">{{$v->getman}}</span>
								<img src="/img/speech-bubble-3-拷贝.png" style="margin-left: 100px;"/> <span>和我联系</span>
								 </div>	
								 <div style="float: left;width: 65%;height: 93px;">
								 	<div style="width: 100%;">
								 	@foreach($pics[$k] as $ks=>$vs)
								 	<img src="{{$vs}}" style="height: 50px;float: left;" />
								 	@endforeach
								    <del style="display: inline-block;margin-left: -38px;margin-top: 20px;color: #858585;">199.00</del>
								    <dl style="float: left;margin-left: 50px;margin-top: 40px;">{{$v->orderprice}}</dl>
								    <span style="margin-left: 40px;">{{$v->passstatus}}</span>
								    <dl style="float: right;margin-right: 50px;margin-top: 20px;">{{$v->getaddress}}
								    </dl>
								    </div>    
								    
								 </div>	
								 
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center;">
								 	
								 	<span style="font-weight: bold;margin-top: 30px;display: block;">129</span>
								 	<dl>(含运费:00)</dl>
								 	
								 </div>
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center ;">
								 	<dl style="margin-top: 30px;">卖家已发货</dl>
								 	<dl>订单详情</dl>
								 	<dl>查看物流</dl>
								 </div>
								 <div style="float: left;border-left: 1px #addff8 solid;width: 11%;height:200px;text-align: center ;">
								 	<dl style="margin-top: 30px;">还有9天10时4分</dl>
								 	<button style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px;">确认收货</button>
								 </div>
								 </div>	
								 @endforeach                     
                        
					  	
								
		</div>
		</div>
		<div class="clear"></div>
		<div class="ng-footer">

			<textarea class="footer-dom" id="footer-dom-02">
			</textarea>
			<div class="ng-fix-bar"></div>
		</div>
		<style type="text/css">
			.fenye{
				    border: 1px #ccc solid;
				     padding: 3px; 
				    width: 20px;
			}
			.ng-footer {
				height:514px;
				margin-top: 0;
			}
			
			.ng-s-footer {
				height: 130px;
				background: none;
				text-align: center;
			}
			
			.ng-s-footer p.ng-url-list {
				height: 25px;
				line-height: 25px;
			}
			
			.ng-s-footer p.ng-url-list a {
				color: #666666;
			}
			
			.ng-s-footer p.ng-url-list a:hover {
				color: #f60;
			}
			
			.ng-s-footer .ng-authentication {
				float: none;
				margin: 0 auto;
				height: 25px;
				width: 990px;
				margin-top: 5px;
			}
			
			.ng-s-footer p.ng-copyright {
				float: none;
				width: 100%;
			}
			
			.root1200 .ng-s-footer p.ng-copyright {
				width: 100%;
			}
		</style>
		<script type="text/javascript" src="js/safe/ms_common.min.js"></script>
	</body>

</html>