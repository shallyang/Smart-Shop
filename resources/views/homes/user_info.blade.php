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
		<script type="text/javascript" src="/js/safe/aywmq_qt.js" ></script>
		<script type="text/javascript" src="/js/safe/da_opt.js" ></script>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
		<link rel="stylesheet" href="/css/safe/css.css" />
		<link rel="stylesheet" href="/css/safe/common.min.css" />
		<link rel="stylesheet" href="/css/safe/ms-style.min.css" />
		<link rel="stylesheet" href="/css/safe/personal_member.min.css" />
		<link rel="stylesheet" href="/css/safe/Snaddress.min.css" />
		<script type="text/javascript" src="/js/sui.js" ></script>
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
		<script type="text/javascript">
			//提示信息关闭
		    setTimeout(function(){

		        $('.error').slideUp(1000);

		    },2000);
		</script>
	</head>
	<body class="ms-body">
	

	  @if (count($errors) > 0)
	        <div class="mws-form-message error" id="dvs">
	             <ul>                     
	                @foreach ($errors->all() as $error)
	                    <li style="font-size:20px;list-style:none">{{ $error }}</li>
	                @endforeach
	            </ul>
	        </div>
	    @endif     
		
		<div id="ms-center" class="personal-member">
			<div class="cont">
				<div class="cont-side">
					<div class="side-neck">
						<i></i>
					</div>
					<div class="ms-side">
						<article class="side-menu side-menu-off">
							<dl class="side-menu-tree">
								<dt>账户管理</dt>
								<dd>
									<a style="color:#f70" href='/user/info'><span class="active"></span>我的资料</a>
								</dd>								
								<dd>
									<a href='/user/address'><span></span>地址管理</a>

								</dd>
							</dl>

							<a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
						</article>
					</div>
				</div>
				<div class="cont-main">
					<div class="main-wrap mt15">
						<h3>
	                        <strong>个人信息</strong>
	                        <a href="/user/order">返回</a>
	                    </h3>
	                    <form action='/user/infoupdate' method='post' enctype='multipart/form-data'>
						<div class="user-profile clearfix">
							<div class="user-profile-wrap">
								<div class="profile-avatar">
									<img src="" height="120" width="120">	
									<div class="edit_bg"></div>
								</div>
								<span id='pic'>选择头像:<input type="file" name='userhead'></span>
							</div>							
							<div class="profile-info">
								<div class="control-group clearfix ">
									<div class="controls lh26">
										<label class="control-label"><em>*</em><span style="margin-left: 10px;">用户名:</span> 
											<input  style="margin-left: 10px;" type="text" name='username'>				   
									</div>					
								</div>
							</div>
						</div>
						<div class="form-list tab-switch personal-wrap-show">							
								<div class="control-group clearfix">
									<label class="control-label"><em>*&nbsp;</em>真实姓名：</label>
									<div class="controls">
										<input  type="text" style='height:30px' maxlength="12"  name='truename'>
									</div>
								</div>
								
								<div class="control-group clearfix">
									<label class="control-label"><em>*&nbsp;</em>性别：</label>
									<div id="gender" class="controls">
										<label class="sex-label">
											<input type="radio" name="usersex" checked="checked" value='1'>
											<span>男</span>
										</label>
										<label class="sex-label">
											<input type="radio" name="usersex" value='0'>
											<span>女</span>
										</label>
									</div>
								</div>
								<div class="control-group clearfix">
									<label class="control-label">手机：</label>
									<div class="controls lh26">
										<input  type="text" style='height:30px' maxlength="12"  name='userphone'>	
									</div>
								</div>
								<div class="control-group clearfix">
									<label class="control-label">邮箱：</label>
									<div class="controls lh26">
										<input  type="text" style='height:30px'   name='useremail'>	
									</div>
								</div>
								<div class="control-group clearfix">
									<label class="control-label">QQ：</label>
									<div class="controls lh26">
										<input  type="text" style='height:30px' maxlength="12"  name='userqq'>			
									</div>
								</div>							
								<div class="control-group clearfix priority-high">
									<label class="control-label"><em>*&nbsp;</em>居住地址：</label>
									<div class="controls">
										<div style="">
								
								<select style="height: 30px;width: 230px;" id='province' name='province'>
									<option >请选择省</option>
								</select>
								<select style="height: 30px;width: 230px;" id='city' name='city'> 
									<option >请选择市区</option>
								</select>
							</div>
										<p class="adress-detail">
											<input type="text" value="" style='height:30px' placeholder='请输入具体地址' name='street'>
											<span class="tips-words"></span>
										</p>
										<div id="" class="error-place ml0">
										</div>
									</div>
								</div>

								<!-- <div id="" class="control-group clearfix" style="display:block;">
									<input id="" type="hidden" autocomplete="off" >
									<label class="control-label"><em>*&nbsp;&nbsp;&nbsp;</em>验证码：</label>
									<div class="controls">
										<input id="" type="text" class="text" maxlength="4" autocomplete="off" name="" style="width:150px" value="">
										<span class="tips-words"></span>
										<img src="/img/yzm.png" id="" width="62" height="24" class="authCode">
										<span class="changeAuthCode" style="margin-bottom: 10px;"><a href="" style="margin-bottom: -4px;position: absolute;">换一张</a></span>
									</div>
									<div id="" class="error-place">
									</div>
								</div> -->
								<div class="control-group clearfix priority-low">
									<label class="control-label">&nbsp;</label>
									<div style="float:left;">
									<button class="ms-stand-btn1">保 存</button>
										{{csrf_field()}}
									</div>
									<div id="" class="error-place"></div>
									<div class="error-place mt29"></div>
								</div>
							</form>
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
			#pic{
				position:absolute;
				top:130px;
				left:30px;
			}
			.cur{
				border:solid 2px blue;
			}
			.lost{
				border:solid 2px green;
			}
		</style>
		<script type="text/javascript" src="js/safe/ms_common.min.js" ></script>
		<script type="text/javascript">
		var provinces = document.getElementById('province');
		var citys = document.getElementById('city');
		var pro = ['安徽','河北','河南','山西'];
		var ct = [
			['亳州','合肥','蚌埠'],
			['石家庄','保定','秦皇岛'],
			['郑州','开封','荥阳'],
			['运城','太原','大同']
			];
		for (var i = 0; i < pro.length; i++) {
		
		provinces.innerHTML += '<option value='+i+'>'+pro[i]+'</option>';
	};
	
	provinces.onchange = function()
	{		
		var v = this.value;
		var j = ct[v];	
		var  into = '';
		for (var i = 0; i < j.length; i++) {			
			into += '<option value='+i+'>'+ j[i]+'</option>';
		}
		citys.innerHTML = into;
	}

		</script>
		<script type="text/javascript">
		

		</script>
	</body>

</html>