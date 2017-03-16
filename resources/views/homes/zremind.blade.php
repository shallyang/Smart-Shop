@extends('homes.muban')
@section('title','邮箱提醒')
@section('person')
@endsection
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
               <div class="style-msg2 successmsg">
                    <div class = "alert alert-success" id = "dv">
                        <div class="msgtitle">用户修改密码提醒:</div>
                        <div class="sb-msg">
                            <ul>         
                                <li style='list-style:none;font-size:17px'>有一封邮件已经下发放到您的邮箱中,请到邮箱中或垃圾箱中点击链接进行登录</li>
                            </ul>
                        </div>
                    </div>
              </div>       
            <script type="text/javascript">
                //  setTimeout(function(){
                //      $('#dv').fadeOut(2000);
                // },6000)
            </script>
        </div>
    </div>
</section>

@endsection
