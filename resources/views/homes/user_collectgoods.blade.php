@if(session('info'))
	<style type="text/css">
		.mws-form-message {
		    font-size: 12px;
		    cursor: pointer;
		    border: 1px solid #d2d2d2;
		    padding: 15px 8px 15px 45px;
		    position: relative;
		    vertical-align: middle;
		    background-position: 12px 12px;
		    background-repeat: no-repeat;
		    background-color: #ffcbca;
		    background-image: url(../images/core/message-error.png);
		    border-color: #eb979b;
		    color: #9b4449;
		    margin-bottom: 0;
    		border-width: 0 0 1px 0;
    		border-radius: 0;
		}

	</style>
    <div class="mws-form-message error">
        {{session('info')}}
    </div>
@endif
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="/js/safe/aywmq_qt.js"></script>
		<script type="text/javascript" src="/js/safe/da_opt.js"></script>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="stylesheet" href="/css/safe/css.css" />
		<link rel="stylesheet" href="/css/safe/common.min.css" />
		<link rel="stylesheet" href="/css/safe/ms-style.min.css" />
		<link rel="stylesheet" href="/css/safe/personal_member.min.css" />
		<link rel="stylesheet" href="/css/safe/Snaddress.min.css" />
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
			#cha{
				font-size:20px;
				position:absolute;
			}
		</style>
		<script type="text/javascript">
			//提示信息关闭
		    setTimeout(function(){

		        $('.error').slideUp(1000);

		    },2000);
		</script>
	</head>

	<body class="ms-body">


			@if (session('info'))
			    <div class="alert alert-success">
			        {{ session('info') }}
			    </div>
			@endif
		<div id="" class="ng-top-banner"></div>
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-main"  style="width: 1210px;">
					<div style="margin-top: 20px;width: 1200px;">
						<font style="font-size: 16px;color: #F88600;font-weight: bold; margin-left:30px;">全部宝贝12</font>
						<div style="float: right; display: block;">
							<input id="" type="text" value="宝贝搜索" style=" float: right;color:#333333;height:auto;margin-left: 10px;float: left;padding: 5px;">
							<div style="float:left;margin-left:10px;background-color: #CECECE;padding: 5px;border: 1px #ccc solid;text-align: center;width: 20px;height: 20px;"><img src="/img/矩形-60-拷贝-3.png"></div>
							<div style="float:left;background: #fff; border: 1px #ccc solid; padding: 5px;width:20px;height: 20px;"><img src="/img/矩形-60-拷贝-2.png"></div>
						</div>

					</div>
					<div style="margin-top: 10px;height: 600px;width: 1200px; border:1px solid #EDEDED">
						<img src="/img/frigidere.png" style="margin-left:10px;margin-top: 25px;margin-bottom: -3px;" />
						<font style="font-size: 12px;color: #8e8e8e;font-weight: bold; margin-top:25px;">全部宝贝</font>
						<img src="/img/钉子图标.png" style="float: right;height: 25px;" id="loginimg">
						<hr style=" border-style:solid;width:1200px;border-color:#f8c3b1;margin-top: 25px;"> </hr>
						  @foreach($arr as $k=>$v)				
						  <div style="float: left;padding: 10px;margin-left: 10px;">			
						  	<!-- <span id='cha'><a href="">×</a></span> -->
							<img src="{{$v->partid}}" style="width: 150px; height:150px" />
							<br />
							<span style="color: #686868;margin-top: 23px;display:block;margin-left: 50px;">{{$v->goodsname}}</span>
							<br />
							<span style="color:#686868;display:block;margin-left: 50px;">
								<font style="font-size:14px;color:#fb3201; font-weight: bold;">{{$v->goodsprice}}</font></span>
								<button onClick="location.href='/user/delcollect/{{$v->goodsid}}'" style="color: fff;background-color: #65b5ff;border: 0px;padding: 4px;margin-top: 5px; margin-left:40px">删除收藏</button>
						</div>								
						@endforeach			
					</div>
				<hr style=" border-style:solid;width: 1200px;border-color:#D3D3D3;"> </hr>             
					</div>
				</div>
			</div>
		</div>
		</div>
		<div class="clear "></div>
		<div class="ng-footer ">

			<textarea class="footer-dom " id="footer-dom-02 ">
			</textarea>
			<div class="ng-fix-bar "></div>
		</div>
		<style type="text/css ">
			.ng-footer {
				height: 130px;
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
		<script type="text/javascript " src="js/safe/ms_common.min.js "></script>
	</body>

</html>