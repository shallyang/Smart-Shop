@extends('admins.moban')
@section('title','订单管理')
@section('content')
@if(session('info'))
    <div class="mws-form-message danger">
        {{session('info')}}
    </div>
@endif
<div class="grid_8">
    <div class="mws-panel">
        <div class="mws-panel-header">
            <span>发货页面</span>
        </div>
        <div class="mws-panel-body no-padding">
            <form class="mws-form" action="/admin/order/goship" method="post">
                <div class="mws-form-inline">
                	<div class="mws-form-row">
        				<label class="mws-form-label">订单号</label>
        				<div class="mws-form-item">
        					<input type="text" class="large" value="{{$id}}" disabled>
        				</div>
        			</div>
                    <div class="mws-form-row">
                        <label class="mws-form-label">合作快递</label>
                        <div class="mws-form-item">
                            <select class="large" name='shippost'>
                                <option value="0">顺丰快递</option>
                                <option value="1">联邦快递</option>
                                <option value="2">京东快递</option>
                                <option value="3">邮政快递</option>
                            </select>
                        </div>
                    </div>
					<div class="mws-form-row">
        				<label class="mws-form-label">快递单号</label>
        				<div class="mws-form-item">
        					<input type="text" class="large" name="passnum">
        					<input type="hidden" class="large" name="orderid" value="{{$id}}">
        				</div>
        			</div>
                </div>
                {{csrf_field()}}
                <div class="mws-button-row">
                    <input type="submit" value="提交" class="btn btn-info">
                    <input type="reset" value="重置" class="btn ">
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection