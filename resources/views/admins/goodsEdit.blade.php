@extends('admins.moban')
@section('title','商品修改')
@section('content')
	<div class="container">
		
		<form class="mws-form" action="/admin/goods/goodskindupdate" method='post'>
			<div class="mws-form-block">
				<div class="mws-form-row">
					<label class="mws-form-label">商品父级</label>
					<div class="mws-form-item">
						<input class="small" type="text" value={{$parname}} disabled>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">商品名称</label>
					<div class="mws-form-item">
						<input class="small" type="text" value={{$res->name}} name='name'>
						<input type="hidden" value={{$res->id}} name='id'>
					</div>
				</div>
				<div class="mws-form-row">
                            <label class="mws-form-label">状态</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><input type="radio" name='status' value='0' @if($res->status=='0') checked @endif> <label>下架</label></li>
                                    <li><input type="radio" name='status' value='1' @if($res->status == '1') checked @endif> <label>上架</label></li>
                                </ul>
                            </div>
                        </div>
							
			</div>
			<div class="mws-button-row">
			 {{csrf_field()}}
			
				<input value="修改" class="btn btn-danger" type="submit">
				<input value="重置" class="btn " type="reset">
			</div>
		</form>                    

	</div>
@endsection