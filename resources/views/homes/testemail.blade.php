@extends('homes.muban')
@section('title','验证邮箱')
@section('content')
<script type="text/javascript" src="/homes/js/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<script src="/admins/bootstrap/js/bootstrap.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="login-page">
	
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">找回您的账户</h3>  
			<div class="login-body">
			@if (count($errors) > 0)
                <div class="alert alert-danger" id="dvs">
                     <ul>                     
                        @foreach ($errors->all() as $error)
                            <li style="font-size:20px;list-style:none">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
            <script type="text/javascript">
		        setTimeout(function(){
		            $('#dvs').slideUp(1000);
		    },3000)  
		    </script> 
		    @if(session('info'))
			    <div class="alert alert-danger" id='dvss'>
			    {{session('info')}}
			    </div>
			@endif
			<script type="text/javascript">
			    setTimeout(function(){
			        $('#dvss').slideUp(1000);
			},3000)
   			</script>  

   			@if(session('suc'))
			    <div class="mws-form-message error" id='dvss'>
			    {{session('suc')}}
			    </div>
			@endif
			<script type="text/javascript">
			    setTimeout(function(){
			        $('#dvss').slideUp(1000);
			},3000)
   			</script>  
				<form action="/home/testemail" method="post" enctype="multipart/form-data">
					<input type="text" class="user" name="username" placeholder="请输入用户名" required="">

					<!-- 判断用户名是否为空 -->
					<script type="text/javascript">

						$('input[name=username]').focus(function(){
                                    $(this).css('border','solid 1px blue').attr('placeholder','请输入用户名');
                                })
						 $('input[name=username]').blur(function(){
                                    if(!($('input[name=username]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','用户名不能为空');                                                      }
                           })
					</script>
				
					<input type="text" class="user" name="useremail" placeholder="请输入邮箱" required="">
					<!-- 判断邮箱是否为空 -->
					<script type="text/javascript">

						$('input[name=useremail]').focus(function(){
                                    $(this).css('border','solid 1px blue').attr('placeholder','请输入邮箱');
                                })
						 $('input[name=useremail]').blur(function(){
                                    if(!($('input[name=useremail]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','邮箱不能为空');                                                      }
                           })
					</script>
					
					<input type="submit" value="验证">
					{{ csrf_field() }}
				</form>
			</div>   
		</div>
	</div>
@endsection