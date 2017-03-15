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
		<link href="/css/font-awesome.css" rel="stylesheet"> 

		<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />


		<script type="text/javascript" src="/js/safe/da_opt.js" ></script>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
		<link rel="stylesheet" href="/css/safe/css.css" />
		<link rel="stylesheet" href="/css/safe/common.min.css" />
		<link rel="stylesheet" href="/css/safe/ms-style.min.css" />
		<link rel="stylesheet" href="/css/safe/personal_member.min.css" />
		<link rel="stylesheet" href="/css/safe/Snaddress.min.css" />
		<link rel="stylesheet" href="/css/zpwd/sui.css" />
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
	<style>
		a{
			color: #000000;
		}
		.sui-table th, .sui-table td {
    padding: 6px 8px;
    line-height: 18px;
    text-align: left;
    vertical-align: middle;
    border-top: 1px solid #e6e6e6;
    font-size: 14px;
    color: #333333;
}
	</style>
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
		<div id="" class="ng-top-banner"></div>
		
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
	                        <strong style=" font-size: 14px;">收货地址</strong>
	                        <a href="/user/order" style="font-size:15px">返回</a>
	                    </h3>
						<div class="user-profile clearfix" style="margin-left: 0px;width: 100%;border: 0px;">
							<div class="user-profile-wrap" style="width: 100%;height: 500px;">
								<p style="margin-left: 70px;font-size: 14px;"><span style="color:#F88600;font-size: 14px;">新增收货地址</span></p>
							<form class="sui-form" action='/user/addressinsert' method='post' >
							<div style="margin-left: 70px;margin-top: 30px;height: 30px;">
								<span style="color: #F2873B;">*&nbsp;</span><span class="titles">所在地区:</span>
								<select style="height: 30px;width: 230px; margin-left: 14px;" id='province' name='province'>
									<option >请选择省</option>
								</select>
								<select style="height: 30px;width: 230px;" id='city' name='city'> 
									<option >请选择市区</option>
								</select>
							</div>
							<div style="margin-left: 70px;margin-top: 50px;">
								<span style="color: #F2873B;">*&nbsp;</span><span class="titles">详细地址:</span>
							</div>
							<div style="margin-left: 150px;margin-top:-40px;">
								<textarea style="width:500px;height: 90px;padding: 5px;" placeholder="建议您如实填写详细收货地址，例如街道 名称，门牌号码，楼层和房间号等信息" name='street'></textarea>
							</div>
							
							<div style="margin-left: 80px;margin-top: 20px;">
								<span class="titles">邮政编号:</span>
								<input type="text" placeholder="如您不清楚地区邮递号，请填写000000" style="width: 300px;margin-left: 14px;" name='number'/>
							</div>
							
							<div style="margin-left: 55px;margin-top: 30px;">
								<span style="color: #F2873B;">*</span>
								<span class="titles">收货人姓名:</span>
								<input type="text" placeholder="长度不超过25个字符" style="width: 300px;margin-left: 14px;" name='name'/>
							</div>
							<div style="margin-left: 80px;margin-top: 30px;">
								<span class="titles">手机号码:</span>
								<select style="margin-left: 14px;">
									<option>中国大陆+86</option>
								</select>
								<input type="text" placeholder="手机号码必须填"  style="width: 200px;" name='phone'/>
							</div>							
							<div style="margin-left: 150px;margin-top: 10px;">							
								<div class="am-u-sm-7 am-u-sm-offset-3" style="padding-right: 0rem;"> 
									
										<input type="checkbox" value='1' name='status'>					
										<span style="font-size: 12px;color: #878787;">
											<font style="font-size: 12px;color: #333333;">设为默认地址</font>
										</span> 
								
								 </div>
										{{csrf_field()}}
							   
							</div>
							
							<button style="margin-left:150px;margin-top:10px;background-color:#F37B1D ;color: #fff;width: 100px;height: 30px;border: 0px;border-radius: 5px;" type='submit'>确定</button>
							</form>
							</div>
							
						</div>
					</div>
				</div>
							
							<div style="margin-top: 30px;width: 1068px; margin: 15px 0 30px 170px;">			
								
								<table class="sui-table table-bordered-simple" style="margin-top: 20px;">
								  <thead>

								    <tr>
								      <th>收货人</th>
								      <th>所在地区</th>
								      <th>收货地址</th>
								      <th>邮编</th>
								      <th>电话/手机</th>
								      <th>操作</th>
								      <th></th>
								    </tr>
								  </thead>
								  <tbody>
								  @foreach($res as $k=>$v)
								    <tr>
								      <td>{{$v->name}}</td>
								      <td>{{$v->province}}&nbsp;{{$v->city}}</td>
								      <td>{{$v->street}}</td>
								      <td>{{$v->number}}</td>
								      <td>{{$v->phone}}</td>
								      <td style="color: #007AFF;"><a href="/user/deladdress/{{$v->id}}">删除</a></td>
								      <td >@if($v->status==1)<span style="padding: 2px;font-size: 10px;color: #EC5937;border-radius:5px;background-color: #fad5d0;border: 1px #C85E0B solid;">默认地址</span></td>@endif
								    </tr>	
								    @endforeach					
								  </tbody>
								</table>
								
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
			.sui-table td 
			{
				font-size: 14px;
			}
			.sui-table td 
			{
				font-size: 12px;
			}
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
		<script type="text/javascript" src="/js/safe/ms_common.min.js" ></script>
	</body>
	<!-- 城市联动 -->
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
	
	
</html>