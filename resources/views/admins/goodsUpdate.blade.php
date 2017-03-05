@extends('admins.moban')

@section('title','子商品修改')

@section('content')

	<div class="container">
	@if (count($errors) > 0)
        <div class="mws-form-message error" id="dvs">
             <ul>                     
                @foreach ($errors->all() as $error)
                    <li style="font-size:20px;list-style:none">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 	
	<form class="mws-form" action="/admin/goods/update" method='post'>
		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">子商品编号：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsid' value="{{$res->goodsid}} " disabled />
					<input class="small" type="hidden" name='goodsid' value="{{$res->goodsid}} " />
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改子商品名称：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsname' value="{{$res->goodsname}}" />
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改子商品库存：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsnum' value="{{$res->goodsnum}}" />
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改子商品规格：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodssize' value="{{$res->goodssize}}" />
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改子商品价格：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsprice' value="{{$res->goodsprice}}" />
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改子商品颜色：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodscolor' value="{{$res->goodscolor}}" />
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改商品描述：</label>
				<div class="mws-form-item">
					<textarea rows="" cols="" class="small" name='goodsdescribe'>{{$res->goodsdescribe}}</textarea>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">选择商品类型：</label>
				<div class="mws-form-item">
					<select class="small" name='typeid'>
					@foreach($type as $k=>$v)
						<option value='{{$v->id}}' @if($v->name == $typeName)selected="selected"@endif>{{$v->name}}</option>
					@endforeach	
					</select>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">修改商品状态：</label>
				<div class="mws-form-item clearfix">
					<ul class="mws-form-list inline">
						<li><input type="radio" name='goodsstatus' value='0' @if($res->goodsstatus == 0)checked="checked" @endif> <label>上架</label></li>
						<li><input type="radio" name='goodsstatus' value='1'  @if($res->goodsstatus == 1)checked="checked" @endif> <label>下架</label></li>		
					</ul>
				</div>
			</div>
		</div>
		<div class="mws-button-row">
			{{csrf_field()}} 
			<input value="提交" class="btn btn-info" type="submit">
			<input value="重置" class="btn btn-warning" type="reset">
		</div>
	</form>
	</div>
                    
@endsection