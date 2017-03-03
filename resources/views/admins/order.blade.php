<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/adminorder.css" media="screen">
<style type="text/css">
    .pagination li{
        margin:0px;
        float: left;
        height: 20px;
        padding: 0 10px;
        display: block;
        font-size: 12px;
        line-height: 20px;
        text-align: center;
        cursor: pointer;
        outline: none;
        background-color: #444444;
        color: #fff;
        text-decoration: none;
        border-right: 1px solid rgba(0, 0, 0, 0.5);
        border-left: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.15);
    }
    .pagination li a{
        color:#ffffff;
    }
    .pagination
    {
        margin:0px;
    }

    .pagination .active
    {
        background-color: #88a9eb;
    }

    .pagination .disabled
    {
        color: #666666;
    }
</style>

<title>订单管理</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<!-- <img src="/admins/images/mws-logo.png" alt="mws admin"> -->
                <span id='logo'>lamp172</span>
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/admins/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>            
                    <li>
                        <a href="#"><i class="icol32-package"></i>&nbsp;&nbsp;订单管理</a>
                        <ul class='closed'>
                            <!-- <li><a href="/admin/user/add"><i class="icol32-package-link"></i>&nbsp;&nbsp;订单修改</a></li> -->
                            <!-- <li><a href="/admin/user/index"><i class="icol32-group-link"></i>订单查询</a></li> -->
                            
                        </ul>
                    </li>                 
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            <!-- 网页显示页面 -->
            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span>
                        <i class="icon-table"></i>
                        <font>
                            <font class="">订单列表</font></font>
                    </span>
                </div>
                <div class="mws-panel-body no-padding">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                        <form>
                            <div id="DataTables_Table_1_length" class="dataTables_length">
                                <label>
                                    <font>
                                        <font>显示</font></font>
                                        <select size="1" name="limit" aria-controls="DataTables_Table_1">
                                            <option value="10" @if($request->limit == '10')selected="selected"@endif>
                                                <font>
                                                    <font>10</font></font>
                                            </option>
                                            <option value="25" @if($request->limit == '25')selected="selected"@endif>
                                                <font>
                                                    <font>25</font></font>
                                            </option>
                                            <option value="50" @if($request->limit == '50')selected="selected"@endif>
                                                <font>
                                                    <font>50</font></font>
                                            </option>
                                        </select>
                                        <font>
                                            <font>条</font>
                                        </font>
                                </label>
                            </div>
                                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                                    <label>
                                        <font>
                                            <font>搜索：</font></font>
                                        <input type="text" placeholder="输入搜索的订单号" name="orderid" value="{{$request->orderid}}"></label>
                                        <input type="submit" value="提交" class="btn  btn-info">
                                </div>
                        </form>    

                        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">
                                        <font>
                                            <font>创建时间</font></font>
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 108px;">
                                        <font>
                                            <font>订单编号</font></font>
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">
                                        <font>
                                            <font>购买商品</font></font>
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 66px;">
                                        <font>
                                            <font>订单金额</font></font>
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 221px;">
                                        <font>
                                            <font>收货地址</font></font>
                                    </th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                                        <font>
                                            <font>发货状态</font></font>
                                    </th>
                                </tr>
                            </thead>
                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                            @foreach($res as $k => $v)
                            <tr class="@if($k % 2 == 1) odd @else even @endif">
                                    <td class="  sorting_1">
                                        <font>
                                            <font>{{date('Y-m-d H:i:s',$v->ordertime)}}</font></font>
                                    </td>
                                    <td class=" ">
                                        <font>
                                            <font>{{$v->orderid}}</font></font>
                                    </td>
                                    <td class=" ">
                                        <font>
                                            <font>
                                                <img src="/images/0.jpg" alt="" width="50">
                                                <img src="/images/0.jpg" alt="" width="50">
                                            </font>
                                        </font>
                                    </td>
                                    <td class=" ">
                                        <font>
                                            <font>{{$v->orderprice}}</font></font>
                                    </td>
                                    <td class=" ">
                                        <font>
                                            <font>
                                                <span>收件人:{{$v->getman}}</span><br />
                                                <span>电话:{{$v->getphone}}</span><br />
                                                <span>收货地址:{{$v->getaddress}}</span>
    
                                            </font>
                                        </font>
                                    </td>
                                    <td class=" ">
                                        <font>
                                            <font>
                                                @if($v -> passstatus == 0)
                                                    未发货&nbsp;&nbsp;
                                                    <button class="btn btn-info">发货</button>
                                                @elseif($v -> passstatus == 1)
                                                    已发货<br/>
                                                    物流单号:<a href="">{{$v->passnum}}</a>
                                                @elseif($v -> passstatus == 2)
                                                    已签收
                                                @elseif($v -> passstatus == 3)
                                                    <!-- 获取需要关闭的订单的id -->
                                                    <form action="/admin/order/close/{{$v->orderid}}" method="get">
                                                        <span>未付款&nbsp;&nbsp;</span>
                                                        <button class="btn btn-warning" >关闭</button>
                                                    </form>
                                                @elseif($v -> passstatus == 4)
                                                    <form action="/admin/order/delete/{{$v->orderid}}" method="get">
                                                        已关闭&nbsp;&nbsp;
                                                        <button class="btn btn-danger">删除</button>
                                                    </form>
                                                @endif
                                            </font>
                                        </font>
                                    </td>
                                </tr>
                            @endforeach    
                            </tbody>
                        </table>
                        <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                            {!! $res->appends($request->all())->render() !!}
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admins/js/demo/demo.dashboard.js"></script>   
</body>
</html>