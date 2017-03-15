@extends('homes.muban')
@section('title','用户登录页')
@section('person')
@endsection
@section('content')

<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">登录到您的账户</h3>  
			<div class="login-body">

			<div class="login-page">
			@if(session('info'))
		        <div class="alert alert-danger" id='dvss' >
		        {{session('info')}}
		        </div>
		    @endif
		    <script type="text/javascript">
		        setTimeout(function(){
		            $('#dvss').fadeOut(1000);
		        },3000)
		    </script>
			
				<!-- form表单 -->
				<form action="/home/logins" method="post" enctype="multipart-form/data">

					<input type="text" class="user" name="username" placeholder="请输入您的用户名" required="">
					<!-- 判断邮箱里面是否为空 -->
					<script type="text/javascript">
						$('input[name=username]').focus(function(){
                                    $(this).css('border','solid 1px blue').attr('placeholder','请输入您的用户名');
                                })
						 $('input[name=username]').blur(function(){
						 	
                                    if(!($('input[name=username]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','用户名不能为空');                           }
                            })
					</script>

					<input type="text" class="user" name="email" placeholder="请输入您的邮箱" required="">
					<!-- 判断邮箱里面是否为空 -->
					<script type="text/javascript">
						$('input[name=email]').focus(function(){
                                    $(this).css('border','solid 1px blue').attr('placeholder','请输入您的邮箱');
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
                                    $(this).css('border','solid 1px blue').attr('placeholder','请输入您的密码');
                                })
						 $('input[name=password]').blur(function(){
                                    if(!($('input[name=password]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','密码不能为空');                                                      }
                           })
					</script>	

					<!-- 验证码	-->
					<input type="text" name="vcode" class="lock" placeholder="请输入验证码" style="width:270px;float:left" required="">
					<!-- 验证码 -->
					<img src="{{ url('home/vcode') }}" alt="" style='margin-left:10px;cursor:pointer;float:right' onclick ='this.src = this.src+="?a"'>
		
					<!-- 判断验证码 -->
					<script type="text/javascript">

						$('input[name=vcode]').focus(function(){
                                    $(this).css('border','solid 1px blue').attr('placeholder','请输入验证码');
                                })
						 $('input[name=vcode]').blur(function(){
                                    if(!($('input[name=vcode]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','验证码不能为空');                                                      }
                           })
					</script>
					<script type="text/javascript">
						$email = $('.user').val();
					</script>
					
					<input type="submit" value="我的账户">

					<div class="forgot-grid">

						<div class="forgot">
							<a href="/home/test">忘记密码 ? »</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h6> 没有账号? <a href="{{ url('home/register')}}">去注册 »</a></h6> 
					{{ csrf_field() }}
				</form>
				<!-- form表单结束 -->
			
			</div>  
			
		</div>
	</div>

@endsection