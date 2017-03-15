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
		<script type="text/javascript">
			//提示信息关闭
		    setTimeout(function(){

		        $('.error').slideUp(1000);

		    },2000);
		</script>
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
			#cz{
				width:150px;
				height:150px;
				background:lightblue;
				background-size:100% 100%;
				display:none;
			}
			#tx{
				width:150px;
				height:150px;
				background:lightblue;
				background-size:100% 100%;
				display:none;
			}
		</style>
		<script type="text/javascript">



		</script>
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
							</dl>

							<a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
						</article>
					</div>
				</div>
				<div class="cont-main">
					<div class="main-wrap mt15" style="border: 0px;">
						<h3 style="background-color:#fafbff ;padding: 15px;width: 980px;">
	                        <strong style="font-size: 18px;color: #333333;">账户余额:<font style="font-size: 20px;color: #F37B1D;margin-left: 10px;">{{$res}}<font style="font-size: 12px;color: #F37B1D;font-weight: bold;">元</font></font></strong>
	                         <button style="width:70px;height:28px;background-color:#f3f3f3;margin-left:100px;padding: 5px; border: 1px #CCCCCC solid;border-radius: 5px;font-size: 12px;color: #757c7f" id='chongzhi'>充值</button>

	                         <button style="width:70px;height:28px;background-color:#f3f3f3;margin-left:20px;padding: 5px; border: 1px #CCCCCC solid;border-radius: 5px;font-size: 12px;color: #757c7f" id='tixian'>提现</button>	                         
	                         
						</h3>					
							<div class="profile-info">
								<div class="control-group clearfix " style="margin-top: 21px;width: 1010px;">
									<div >
										<span  style="margin-left:15px;">
											<font style="font-size: 14px;color: #333333; font-weight:bold;" >最近交易记录</font>
										</span>
                                        <a style="color: #007AFF;margin-left: 20px;margin-right: 20px;" href='/user/mymoney'>充值记录 </a>|<a style="color: #007AFF;margin-left: 20px;margin-right: 20px;" href='/user/outmoney'>提现记录</a>|                        
									 </div>
								</div>							
							</div>

						<div style="margin-top:5px;height:50px;width:1014px; display: block;">
							<table class="sui-table table-nobordered" style="border: 1px #ccc solid;" >

							@foreach($pro as $k=>$v)
								 <thead>
									@if(!$v->paystatu)
								<tr>
									<th><font style="font-size: 12px;margin-left:83px; ">{{date('Y-m-d H:i:s',$v->time)}}</font></th>
									<th  nowrap><font style="font-size: 12px; ">充值</font></th>
									<th   nowrap><font style="font-size: 12px; ">+{{$v->moneydiff}}</font></th>
									<th nowrap ><font style="font-size: 12px;margin-left:28px; ">交易成功</font></th>								
								</tr>
									@else
								<tr>
									<th><font style="font-size: 12px;margin-left:83px; ">{{date('Y-m-d H:i:s',$v->time)}}</font></th>
									<th  nowrap><font style="font-size: 12px; ">提现</font></th>
									<th   nowrap><font style="font-size: 12px; ">-{{$v->moneydiff}}</font></th>
									<th nowrap ><font style="font-size: 12px;margin-left:28px; ">交易成功</font></th>								
								</tr>
									@endif
								</thead>
							@endforeach			
							</table>		
								<div id='cz'>
									<center>
									<form action="/user/mymoneyinsert" method='post'>
									<span style="color:red;">请输入您的充值金额:</span></p>
										<input type="text" name='usermoney' style='width:70px;height:25px'>			
										<input type="submit" value='确定' id='close'>
										{{csrf_field()}}
									</form>
									</center>
								</div>
								<div id='tx'>
									<center>
									<form action="/user/outmoney" method='post'>
									<span style="color:red;">请输入您的提现金额:</span></p>
										<input type="text" name='usermoney' style='width:70px;height:25px'>
										
										<input type="submit" value='确定' id='closes'>
										{{csrf_field()}}
									</form>
									</center>
								</div>
											
						</div>
					</div>
				</div>

			</div>
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
		<script type="text/javascript" src="/js/safe/ms_common.min.js"></script>
		<script type="text/javascript">
		$('#chongzhi').click(function()
		{
			$('#cz').show(2000);
		})
		$('#close').click(function()
		{
			$('#cz').hide(1000);
		})

		$('#tixian').click(function()
		{
			$('#tx').show(2000);
		})
		$('#closes').click(function()
		{
			$('#tx').hide(1000);
		})
		</script>
	</body>

</html>