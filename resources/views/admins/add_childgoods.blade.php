@extends('admins.moban')

@section('title','子商品添加')

@section('content')

@if (count($errors) > 0)
    <div class="mws-form-message error" id="dvs">
         <ul>                     
            @foreach ($errors->all() as $error)
                <li style="font-size:20px;list-style:none">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  

	<div class="container"> 	
	<form class="mws-form" action="/admin/goods/goodsinsert" method='post' enctype='multipart/form-data'>
		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">添加子商品名称：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsname'>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">子商品库存：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsnum'>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">子商品规格：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodssize'>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">子商品价格：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodsprice'>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">子商品颜色：</label>
				<div class="mws-form-item">
					<input class="small" type="text" name='goodscolor'>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">商品描述：</label>
				<div class="mws-form-item">
						<div>				
						    <script id="editor" type="text/plain" style="width:900px;height:300px;" name='goodsdescribe'></script>
						</div>					
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">选择商品类型：</label>
				<div class="mws-form-item">
					<select class="small" name='typeid'>
					@foreach($res as $k=>$v)
						<option value='{{$v->id}}'>{{$v->name}}</option>
					@endforeach	
					</select>
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">商品状态：</label>
				<div class="mws-form-item clearfix">
					<ul class="mws-form-list inline">
						<li><input type="radio" name='goodsstatus' value='0'> <label>上架</label></li>
						<li><input type="radio" name='goodsstatus' value='1'> <label>下架</label></li>		
					</ul>
				</div>				
                <div class="mws-form-row">
                    <label class="mws-form-label">上传商品图片:</label>
                    <div class="mws-form-item">
                        <input type="file" class="small" name="picurl[]" multiple>
                    </div>
                </div>
                 
				
			</div>
		</div>
		<div class="mws-button-row">
			{{csrf_field()}} 
			<input value="添加" class="btn btn-danger" type="submit">
			<input value="重置" class="btn " type="reset">
		</div>
	</form>
	</div>
                    
@endsection