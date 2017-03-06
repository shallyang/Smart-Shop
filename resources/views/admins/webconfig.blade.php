@extends('admins.moban')
@section('title','网站配置')
<style>
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(images/main/addinfoblue.jpg) no-repeat 0 1px;}
</style>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/admins/css/css.css" type="text/css" rel="stylesheet" />

<link href="/admins/css/main.css" type="text/css" rel="stylesheet" />

<link rel="shortcut icon" href="images/main/favicon.ico" />

@section('content')
@if(session('info'))
    <div class="mws-form-message success" id='dvss'>
        {{session('info')}}
    </div>
@endif

<script type="text/javascript">
    setTimeout(function(){
        $('#dvss').slideUp(1000);
    },3000)
</script>
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table"></i>
            <font>
                <font class="">网站配置</font></font>
        </span>
    </div>
</div> 


<!-- <script src="/js/libs/jquery-1.8.3.min.js"></script> -->
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
 
  <tr>
    <td align="left" valign="top">
    <form method="post" action="/admin/webconfig/insert" enctype="multipart/form-data">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">

      <!-- 网站标题的设置 -->
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站标题：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="title" value="" class="text-word" placeholder="请输入标题">
        <!-- <input type="hidden" name="webtitle" value=""> -->
        </td>
        </tr>


        <!-- 网站关键字的设置 -->
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站关键字：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="keywords" value="" class="text-word" placeholder="请输入关键字">
        </td>
        </tr>


        <!-- 网站描述的设置 -->
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站描述：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="description" value="" class="text-word" placeholder="请输入描述信息">
        </td>
        </tr>


        <!-- 网站版权的设置 -->
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站版权：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="copyright" value="" class="text-word" placeholder="用正斜线/分割开">
        </td>
        </tr>


        <!-- 网站开关的设置 -->
         <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">网站开关：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <label><input type="radio" name="open" value="0" checked="checked">开启</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <label><input type="radio" name="open" value="1" >关闭</label>
        
        <!--  单选框的获取和设置
         获取默认选中的值 -->
        <script type="text/javascript">
            var sexs = $('input[name=open]');
            //遍历数组对象
            sexs.each(function(){
                var che = $(this).attr('checked');
            })
            
            //设置  value='开'  checked默认选中的状态
            $('input[name=sex][value=0]').attr('checked',true);

        </script>
        </td>
        </tr>
        <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">缩略图：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="file" name="logo" value="">
        </td>
      </tr>
        

      
        <!-- 提交重置的设置 -->
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="submit" value="提交" class="text-but">
        <input type="reset" value="重置" class="text-but"></td>
        </tr>
        {{ csrf_field() }}
    </table>
    </form>
    </td>
    </tr>
</table>

@endsection
