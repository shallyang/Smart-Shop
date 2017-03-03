<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">

<title>网站后台登录页面</title>

</head>

<body>
    
    <script src="/js/libs/jquery-1.8.3.min.js"></script>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>登录框</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">

               <form action="/admin/login/login" method='post' enctype='multipart/form-data'>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" class="mws-login-username required" placeholder="请输入用户名">
                            
                           <!-- 判断用户名不能为空 -->
                           <script type="text/javascript">
                                
                                $('input[name=username]').focus(function(){

                                    $(this).css('border','solid 1px blue');
                                   
                                })
                                
                                $('input[name=username]').blur(function(){
                                    if(!($('input[name=username]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','用户名不能为空');
                                      
                                    }
                                       
                                    
                                })
                                
                            </script>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="请输入密码">
                            
                            <!-- 判断登录密码不能为空 -->
                            <script type="text/javascript">
                                
                                $('input[name=password]').focus(function(){

                                    $(this).css('border','solid 1px blue');
                                   
                                })
                               
                                $('input[name=password]').blur(function(){
                                    if(!($('input[name=password]').val())){
                                        $(this).css('border','solid 1px red').attr('placeholder','密码不能为空');
                                       
                                    }
                                        
                                    
                                })  
                            </script>
                        </div>
                    </div>
                    <div id="mws-login-remember" class="mws-form-row mws-inset">
                        <ul class="mws-form-list inline">

                            <li>
                                <!-- <td width="250px" height="30px" ><span class="login_txt">验证码：</span>
                                </td>
                                <td height="35" colspan="2"><input name="yz" type=text value="" maxLength=4 size=10>
                                <a><img src="/public/yz.php" width="60px" height="100%"/></a>
                                </td> -->
                            </li>



                        </ul>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="登录" class="btn btn-success mws-login-button">
                    
                         <script type="text/javascript">
                            $(':submit').click(function(){
                                $user = $('input[name=username]').val();
                                $pwd = $('input[name=password]').val();
                                if($user && $pwd){
                                    return true;
                                }
                                return false;
                            })
                        </script>

                    </div>
                       
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/js/libs/jquery.placeholder.min.js"></script>
    <script src="custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/js/core/login.js"></script>

</body>
</html>
