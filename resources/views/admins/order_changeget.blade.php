@extends('admins.moban')
@section('title','收货信息修改')
@section('content')
	@if(session('info'))
	    <div class="mws-form-message danger">
	        {{session('info')}}
	    </div>
	@endif
	<div class="mws-panel grid_8">
		<div class="mws-panel-header">
			<span>信息修改</span></div>
		<div class="mws-panel-body no-padding">
			<form class="mws-form" action="/admin/order/changeget" method="post">
				<div class="mws-form-inline">
					<div class="mws-form-row">
						<label class="mws-form-label">收货人</label>
						<div class="mws-form-item">
							<input type="text" class="small" name="getman" value="{{$res->getman}}"></div>
					</div>
					<div class="mws-form-row">
						<label class="mws-form-label">手机号</label>
						<div class="mws-form-item">
							<input type="text" class="medium" name="getphone" value="{{$res->getphone}}">
							<input type="hidden" class="medium" name="orderid" value="{{$res->orderid}}"></div>
					</div>
					<div class="mws-form-row">
						<label class="mws-form-label">收货地址</label>
						<div class="mws-form-item">
							<textarea type="text" class="medium" name="getaddress">{{$res->getaddress}}</textarea></div>
					</div>
				</div>
				{{ csrf_field() }}
				<div class="mws-button-row">
					<input type="submit" value="提交" class="btn btn-info">
					<input type="reset" value="重置" class="btn "></div>
			</form>
		</div>
	</div>
@endsection	