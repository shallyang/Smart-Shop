@extends('admins.moban')
@section('title','回复')
@section('content')
	<div class="container">
	 @if (count($errors) > 0)
        <div class="mws-form-message error" id="dvs" id='mess'>
        <ul>                     
            @foreach ($errors->all() as $error)
                <li style="font-size:20px;list-style:none">{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif   
    @if(session('info'))
    	<div class="mws-form-message success">
        	{{session('info')}}
    	</div>
	@endif
    <script type="text/javascript">
	    setTimeout(function()
	    {
	    	$('#mess').slideUp(1000);
	    },2000)
    </script>
		
		<form class="mws-form" action="/admin/user/replaycontent" method='post'>
			<div class="mws-form-block">
				<div class="mws-form-row">
					<label class="mws-form-label">回复编号</label>
					<div class="mws-form-item">
						<input class="small" type="text" value={{$res->id}} disabled/>
						<input type="hidden" name='id' value={{$res->id}} />
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">用户名称</label>
					<div class="mws-form-item">
						<input class="small" type="text" name='user_name' value={{$res->user_name}} disabled>
						<input class="small" type="hidden" name='user_name' value={{$res->user_name}} >
						<input class="small" type="hidden" name='user_email' value={{$res->user_email}}>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">提交内容</label>
					<div class="mws-form-item">
						<textarea name="" id="" cols="76" rows="10" disabled>{{$res->user_text}}</textarea>
					</div>
				</div>
				<div class="mws-form-row">
					<label class="mws-form-label">回复内容</label>
					<div class="mws-form-item">
						<textarea name="reply" id="" cols="76" rows="10"></textarea>
					</div>
				</div>	
			</div>
			<div class="mws-button-row">
			 {{csrf_field()}}
			
				<input value="回复" class="btn btn-danger" type="submit">
				<input value="重置" class="btn " type="reset">
			</div>
		</form>                    

	</div>
@endsection