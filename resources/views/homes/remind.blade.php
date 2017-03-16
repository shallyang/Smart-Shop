@extends('homes.muban')
@section('title','用户激活提醒')
@section('person')
@endsection
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
           <div class="style-msg2 successmsg">
                <div class = "alert alert-success" id = "dv">
                    <div class="msgtitle">新用户注册激活提醒:</div>
                    <div class="sb-msg">
                        <ul>
                            <li style='list-style:none;font-size:17px'>有一封邮件已经下发放到您注册的邮箱中,请到邮箱中或垃圾箱中点击链接进行激活后登录</li>
                        </ul>
                    </div>
                </div>       
                <script type="text/javascript">
                    //  setTimeout(function(){
                    //      $('#dv').fadeOut(1000);
                    // },3000)
                </script>   
            </div>
        </div>
    </div>
</section>

@endsection