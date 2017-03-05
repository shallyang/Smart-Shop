@extends('admins.moban')
@section('title','商品管理')
@section('content')
     <div class="container"> 
     <!-- 表单验证  -->
    @if (count($errors) > 0)
        <div class="mws-form-message error" id="dvs">
        <ul>                     
            @foreach ($errors->all() as $error)
                <li style="font-size:20px;list-style:none">{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif   
    <!-- 提示信息 -->
    <script type="text/javascript">
        setTimeout(function()
        {
            $('#mess').slideUp(1000);
        },2000)
    </script>
                <!-- 网页中心 -->                  
                <form class="mws-form" action="/admin/goods/goodskindinsert" method='post'>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label">添加商品类型：</label>
                            <div class="mws-form-item">
                                <input class="small" type="text" name='name'>
                            </div>
                        </div>                                      
                        <div class="mws-form-row">
                            <label class="mws-form-label">选择父级商品类型：</label>
                            <div class="mws-form-item">
                                <select class="small" name='pid'>
                                    <option value='0'>请选择</option>
                                    @foreach ($res as $k=>$v)
                                    <option value='{{$v->id}}'>{{$v->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
                        <div class="mws-form-row">
                            <label class="mws-form-label">状态</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline">
                                    <li><label><input type="radio" name='status' value='0' > 上架</label></li>
                                    <li><label><input type="radio" name='status' value='1'> 下架</label></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <input value="提交" class="btn btn-danger" type="submit">
                        <input value="重置" class="btn " type="reset">
                    </div>
                    {{csrf_field()}}
                </form>             
            </div>

@endsection