@extends('homes.muban')
@section('title','常见问题')
@section('content')
<div class="contact">
	<div class="container"> 
		<div class="contact-form-row">
			<h3 class="w3ls-title w3ls-title1">输入您的问题</h3>  
			<div class="col-md-7 contact-left">
				<form action="/user/content" method="post">
					<input type="text" name="user_name" placeholder="请输入您的姓名" required="">
					<input class="email" type="text" name="user_email" placeholder="请输入您的邮箱" required="">
					<textarea placeholder="您的需求,投诉或建议" name="user_text" required=""></textarea>
					{{csrf_field()}}
					<input type="submit" value="提交">
				</form>
			</div> 
			<div class="col-md-4 contact-right">
				<div class="cnt-w3agile-row">
					<div class="col-md-3 contact-w3icon">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="col-md-9 contact-w3text">
						<p>管理订单 <br>跟踪订单 &amp; 退货退款 </p> 
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="cnt-w3agile-row cnt-w3agile-row-mdl">
					<div class="col-md-3 contact-w3icon">
						<i class="fa fa-bell" aria-hidden="true"></i>
					</div>
					<div class="col-md-9 contact-w3text">
						<p>投诉建议 <br>获取您的投诉 &amp; 建议 </p> 
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="cnt-w3agile-row">
					<div class="col-md-3 contact-w3icon">
						<i class="fa fa-heart" aria-hidden="true"></i>
					</div>
					<div class="col-md-9 contact-w3text">
						<p>您的需求<br> 您的心愿单,评价</p> 
					</div>
					<div class="clearfix"> </div>
				</div>
			</div> 
			<div class="clearfix"> </div>	
		</div>
	</div>
</div>
@endsection();