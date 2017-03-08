@extends('homes.muban')
@section('title','创建用户页')
@section('content')
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">创建您的账户</h3>  
			<div class="login-body">
				<form action="/home/registers" method="post" enctype="multipart/form-data">
					<input type="text" class="user" name="name" placeholder="请输入用户名" required="">

					<!-- 判断用户名是否为空 -->
					<script type="text/javascript">

						$('input[name=name]').focus(function(){
                                    $(this).css('border','solid 1px blue');
                                })
						 $('input[name=name]').blur(function(){
                                    if(!($('input[name=name]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','用户名不能为空');                                                      }
                           })
					</script>
					
					<input type="text" class="user" name="email" placeholder="请输入邮箱" required="">
					<!-- 判断邮箱是否为空 -->
					<script type="text/javascript">

						$('input[name=email]').focus(function(){
                                    $(this).css('border','solid 1px blue');
                                })
						 $('input[name=email]').blur(function(){
                                    if(!($('input[name=email]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','邮箱不能为空');                                                      }
                           })
					</script>
					<input type="password" name="password" class="lock" placeholder="请输入密码" required="">

					<!-- 判断密码是否为空 -->
					<script type="text/javascript">

						$('input[name=password]').focus(function(){
                                    $(this).css('border','solid 1px blue');
                                })
						 $('input[name=password]').blur(function(){
                                    if(!($('input[name=password]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','密码不能为空');                                                      }
                           })
					</script>
					
					<input type="submit" value="创建 ">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>记住密码</label>
						<div class="forgot">
							<a href="#">忘记密码?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					{{ csrf_field() }}
				</form>
			</div>  
			<h6>创建完成? <a href="{{ url('/home/login') }}">立即登录 »</a> </h6>  
		</div>
	</div>
@endsection