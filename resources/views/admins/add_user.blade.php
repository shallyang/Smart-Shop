@extends('admins.moban')

@section('title','用户添加')

@section('content')
            <!-- css自添加样式 -->
            <style type="text/css">
                /*设置表单的字体大小*/
                .mws-panel{font-size:16px;}
                .sp{font-size:25px;color:lightblue;}
                input{height:35px;font-size:15px;}
            </style>
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span><i class="icon-add-contact"></i>用户添加</span>
                </div>
                @if (count($errors) > 0)
                    <div class="mws-form-message error" id="dvs">
                         <ul>                     
                            @foreach ($errors->all() as $error)
                                <li style="font-size:20px;list-style:none">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif       
                <div class="mws-panel-body no-padding">
                    <form action="/admin/user/insert" method="post" enctype='multipart/form-data' class="mws-form">
                        <div class="mws-form-inline">
                            <div class="mws-form-row">
                                <label class="mws-form-label"><font><font>用户姓名:</font></font></label>
                                <div class="mws-form-item">
                                    <input type="text" class="small" name="username" placeholder="请输入您的姓名..." value="{{ old('username')}}">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label"><font><font></font>用户密码:</font></label>
                                <div class="mws-form-item">
                                    <input type="password" class="small" name="userpassword" placeholder="请输入您的密码...">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label"><font><font>确认密码:</font></font></label>
                                <div class="mws-form-item">
                                    <input type="password" class="small" name="repassword" placeholder="请您再次输入密码...">
                                </div>
                            </div>
                              <div class="mws-form-row">
                                <label class="mws-form-label"><font><font>邮　　箱:</font></font></label>
                                <div class="mws-form-item">
                                    <input type="useremail" class="small"name="useremail" placeholder="请输入您的邮箱..." value="{{ old('useremail')}}">
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label class="mws-form-label"><font><font>QQ　　:</font></font></label>
                                <div class="mws-form-item">
                                    <input type="text" class="small" name="userqq" placeholder="请输入您的QQ..." value="{{ old('userqq')}}">
                                </div>
                            </div>
                              <div class="mws-form-row">
                                <label class="mws-form-label"><font><font>手机号　:</font></font></label>
                                <div class="mws-form-item">
                                    <input type="text" class="small" name="userphone" placeholder="请输入您的手机号..." value="{{ old('userphone')}}">
                                </div>
                            </div>
                              <div class="mws-form-row">
                                <label class="mws-form-label"><font><font>上传头像:</font></font></label>
                                <div class="mws-form-item">
                                    <input type="file" class="small" name="userhead" value="{{ old('userhead')}}">
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            {{ csrf_field() }}
                            <font><font><input type="submit" value="提交" class="btn btn-info"></font></font>
                            <input type="reset" value="重置" class="btn btn-danger">
                        </div>
                    </form>
                </div>      
            </div>
            
@endsection

<!-- 设置时间自动消失 -->
 <script type="text/javascript">
    setTimeout(function(){

        $('#dvs').slideUp(1000);
    },3000);
</script>