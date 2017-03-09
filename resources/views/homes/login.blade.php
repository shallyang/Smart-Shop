@extends('homes.muban')
@section('title','用户登录页')
@section('content')

<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
	<!-- login-page -->
	<div class="login-page">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">登录到您的账户</h3>  
			<div class="login-body">
				
				<!-- form表单 -->
				<form action="/home/logins" method="post" enctype="multipart-form/data">
					
					<input type="text" class="user" name="email" placeholder="请输入您的邮箱" required="">
					<!-- 判断邮箱里面是否为空 -->
					<script type="text/javascript">

						$('input[name=email]').focus(function(){
                                    $(this).css('border','solid 1px blue');
                                })
						 $('input[name=email]').blur(function(){
                                    if(!($('input[name=email]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','邮箱不能为空');                           }
                            })
					</script>
					
					<input type="password" name="password" class="lock" placeholder="请输入您的密码" required="">
					
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
					
					<input type="submit" value="我的账户">

					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					{{ csrf_field() }}
				</form>
				<!-- form表单结束 -->
			
			</div>  
			<h6> 没有账号? <a href="{{ url('home/register')}}">去注册 »</a> </h6> 
			
		</div>
	</div>

@endsection