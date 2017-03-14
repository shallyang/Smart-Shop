<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单修改</title>
	<style type="text/css">
	#div{
		width:500px;
		height:500px;
		border:solid 1px blue;
	}
	input{
		margin:20px auto;
	}

	</style>
</head>
<body>
	<center>
	<div id='div'>
		<form action="/user/changeget" method='post'>
			收货人：<input type="text" value='{{$res->getman}}' name='getman'><br>
			手机号：<input type="text" value='{{$res->getphone}}' name='getphone'><br>
		收货地址：  <textarea name="getaddress" id="" cols="30" rows="10" >{{$res->getaddress}}</textarea>	
		<input type="hidden" value='{{$res->orderid}}' name='orderid'>	
			<input type="submit" value='修改'>
			<input type="reset" value='重置'>
			{{csrf_field()}}
		</form>
	</div>
	</center>
</body>
</html>